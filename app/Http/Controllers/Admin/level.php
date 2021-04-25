<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\levels ;
use DB ;
use Spatie\Translatable\HasTranslations;
class level extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'grade' ;
        $data = levels::all();
        return view('Admin.level.index' , compact('data' , 'title')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
       

      $request->validate([
         'EnName.*' => 'required|unique:levels,name->en' ,
         'ArName.*' => 'required|unique:levels,name->ar' ,
         'grade_id.*' => 'required' ,
       ]);

       

       $EnName = request('EnName') ;
       $ArName = request('ArName') ;   
       $grade_id = request('grade_id') ;   
        

         for($m=0;$m < count($EnName);$m++){
             $i = new levels ;
             $i->grade_id = $grade_id[$m] ;
             $i->setTranslation('name', 'en', $EnName[$m]) 
                ->setTranslation('name', 'ar', $ArName[$m]) 
               ->save();
         }
            toastr()->success(trans('admin.success'));
             return back();

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $EnName = $request['EnName'] ; 
        $ArName = $request['ArName'] ; 
        $grade_id = $request['grade_id'] ; 
         $request->validate([
        'EnName' => 'required|unique:levels,name->en,'.$id ,
        'ArName' => 'required|unique:levels,name->ar,'.$id ,
        'grade_id' => 'required' ,
      ]);

       $i = levels::find($id) ;
       $i->grade_id = $grade_id ;
       $i->setTranslation('name', 'en', $EnName) 
        ->setTranslation('name', 'ar', $ArName) 
        ->save();

        toastr()->success(trans('admin.successUpdate'));
        return back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  levels::destroy($id) ;
        // toastr()->success(trans('admin.successDelete'));
        // return back();  

       
        print_r(request('arr')) ;
    }

     public function deleteAll(request $q)
    {

        $arr = explode(',' , $q['arr']) ;
    
       levels::destroy($arr) ;
         toastr()->success(trans('admin.successDelete'));
         return back();  
    }
}
