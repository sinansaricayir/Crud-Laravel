<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class indexController extends Controller
{
    public function index(){
        $students=Student::all();

        return view('index',['students'=>$students]);
    }


    public function add(){
        return view('add');
    }

    public function addpost(Request $request){

        $all=$request->except('_token');
        $data=Student::create($all);

        return redirect()->route('index');

    }

    public function edit($id){

       // $id=$request->route('id');   //Request $request ile de yapılabilir !

        $student=Student::where('id',$id)->get();

        return view('edit',['student'=>$student]);

    }

    public function editpost(Request $request){  //request yanına $id de yazılarak devam edilebilir !
        $all=$request->except('_token');
        $id=$request->route('id');
        $data=Student::where('id',$id)->update($all);



        return redirect()->route('index');
    }

    public function delete($id){

        // $id=$request->route('id');   //Request $request ile de yapılabilir !

        $delete=Student::where('id',$id)->delete();

        return redirect()->route('index');

    }




}



