<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\grade ;
use App\levels ;
use Spatie\Translatable\HasTranslations;
class ConGrade extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $q)
    {
        if(isset($q['id'])){
             $title = 'grade' ;
            $data = levels::where('grade_id' , $q['id'])->get();
           return view('Admin.level.index' , compact('data' , 'title')) ;
           
        }

        $title = 'grade' ;
        $data = grade::all();
        return view('Admin.grade.index' , compact('data' , 'title')) ;
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
    public function store(Request $request)
    {
      $EnName = request('EnName') ;
      $ArName = request('ArName') ;

      $request->validate([
        'EnName' => 'required|unique:grades,name->en' ,
        'ArName' => 'required|unique:grades,name->ar' ,
      ]);

        $i = new grade ;
        $i->setTranslation('name', 'en', $EnName) 
         ->setTranslation('name', 'ar', $ArName) 
         ->save();

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
         $request->validate([
        'EnName' => 'required|unique:grades,name->en,'.$id ,
        'ArName' => 'required|unique:grades,name->ar,'.$id ,
      ]);

       $i = grade::find($id) ;
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
        grade::destroy($id) ;
        toastr()->success(trans('admin.successDelete'));
        return back();  
    }
   


}
