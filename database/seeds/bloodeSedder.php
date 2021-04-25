<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\bloode;
class bloodeSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('bloodes')->delete() ;
    	$bllode = ['A+' , 'A-' , 'B+' ,'B-' , 'AB+' , 'AB-' ,  'O+' , 'O-'] ;
    	
    	foreach($bllode as $row){
    		$i = new bloode ;
    		$i->name = $row ;
    		$i->save();
    	}
    	
    }
}
