<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\bloode ;
use App\dyana ;
use App\myParent ;
use App\card_id ;
use App\attachment ;

class MyParents extends Component
{
     use WithFileUploads;
	//public $message  ;
	public $currentStep = 1 ;
    public $photo;


    public  $username ,
            $password ,


            $f_name ,
            $f_card_id ,
            $f_job ,
            $f_mobile ,
            $f_bloode ,
            $f_dayana ,
            $f_address ,
           

            $m_name ,
            $m_card_id ,
            $m_job ,
            $m_mobile ,
            $m_bloode_id ,
            $m_dayana ,
            $m_address ;






    public $old_card_id ;
    public $uniqueCard ;
    

    protected $rules =  [
         'username'          => 'required|unique:my_parents' ,
         'password'          => 'required' ,
         'photo'             => 'image|max:1024',

         'f_name'            => 'required' ,
         'f_card_id'        => 'required|unique:card_ids,parent_card_id|max:12' ,
         'f_job'             => 'required' ,
         'f_mobile'          => 'required|numeric|unique:my_parents' ,
         'f_bloode'          => 'required' ,
         'f_dayana'          => 'required' ,
         'f_address'         => 'required' ,

          'm_name'            => 'required' ,
          'm_card_id'         => 'required|unique:card_ids,parent_card_id|max:12' ,
          'm_job'             => 'required' ,
          'm_mobile'          => 'required|numeric|unique:my_parents' ,
          'm_bloode_id'       => 'required' ,
          'm_dayana'          => 'required' ,
          'm_address'         => 'required' ,
    ];

    public function render()
    {
    	$bloodes = bloode::all() ; 
    	$dayana = dyana::all() ; 
        return view('livewire.my-parents' , compact('bloodes'  , 'dayana'));
    }

    public function firstStepSubmit(){
        $valid = $this->validate([
          'username'          => 'required|unique:my_parents' ,
          'password'          => 'required' ,


          'f_name'            => 'required' ,
          'f_card_id'         => 'required|unique:card_ids,parent_card_id|max:12' ,
          'f_job'             => 'required' ,
          'f_mobile'          => 'required|numeric' ,
          'f_bloode'          => 'required' ,
          'f_dayana'          => 'required' ,
          'f_address'         => 'required' ,

         
        ]);

    	$this->currentStep = 2 ;

        $this->old_card_id = $this->f_card_id ;
    }

    public function emptyvalid(){


         $this->username         = '';
         $this->password         = '';
         $this->f_name           = '';
         $this->f_card_id        = '' ;
         $this->f_job            = '' ;
         $this->f_mobile         = ''  ;
         $this->f_bloode         = '' ;
         $this->f_dayana         = '' ;
         $this->f_address        = '' ;

          $this->m_name       = '' ;
          $this->m_card_id    = '' ;
          $this->m_job        = '' ;
          $this->m_mobile     = '' ;
          $this->m_bloode_id  = '' ;
          $this->m_dayana     = '' ;
          $this->m_address    = '' ;
    }

    public function SecondStepSubmit(){

         $valid = $this->validate([

          'm_name'            => 'required' ,
          'm_card_id'         => 'required|unique:card_ids,parent_card_id|max:12' ,
          'm_job'             => 'required' ,
          'm_mobile'          => 'required|numeric' ,
          'm_bloode_id'       => 'required' ,
          'm_dayana'          => 'required' ,
          'm_address'         => 'required' ,
        ]);

         if($this->m_card_id == $this->old_card_id){
            $this->addError('oldCard', 'this card by father.');
         }else{
            $this->currentStep = 3 ;
         }

    }

    public function TherdStepSubmit(){

      if(!empty($this->photo)){

          $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
          ]);

          $m = $this->photo->store('photos');
          attachment::create([
            'image_name' => $m , 
            'parent_id' => myParent::latest()->first()->id ,
          ]);

         \Storage::deleteDirectory('livewire-tmp');

      }
     card_id::create(['parent_card_id' => $this->f_card_id]);
     card_id::create(['parent_card_id' => $this->m_card_id]);
     myParent::create([
         'username'      => $this->username ,
         'password'      => MD5($this->password) ,
         'f_name'        => $this->f_name ,
         'father_Card_ID'=> $this->f_card_id ,
         'f_dayana_id'   => $this->f_dayana ,
         'f_job'         => $this->f_job ,
         'f_bloode_id'   => $this->f_bloode ,
         'f_mobile'      => $this->f_mobile ,
         'f_address'     => $this->f_address ,
         'm_name'        => $this->m_name ,
         'm_Card_ID'     => $this->m_card_id ,
         'm_bloode_id'   => $this->m_bloode_id ,
         'm_dayana_id'    => $this->m_dayana ,
         'm_job'         => $this->m_job ,
         'm_mobile'      => $this->m_mobile ,
         'm_address'     => $this->m_address , 
         ]);

         $this->emptyvalid() ;
         $this->currentStep = 1 ;
    }

    public function backSubmit($v){
    	$this->currentStep = $v ;
    }

    public function updated($q)
    {
        $this->validateOnly($q) ;
    }


}
