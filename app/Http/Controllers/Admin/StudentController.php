<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){

      $data['students'] = Student::select('id','name','email','speciality')->orderBy('id','DESC')->get();


      return view('admin.students.index')->with($data);

    }

    public function create()
    {

        return view('admin.students.create');
    }

    public function store(Request $request){
     
        $data = $request->validate([
              'name' => 'required|string|max:50',
              'speciality' => 'nullable|string|max:50',
              'email' => 'required|string|max:20',
              

        ]);
  

          Student::create($data);
          return redirect(route('admin.students.index'));


    }


    public function edit($id)
    {
        $data['student'] = Student::findOrFail($id);
        return view('admin.students.edit')->with($data);
    }

    public function update(Request $request){
     
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'speciality' => 'nullable|string|max:50',
            'email' => 'required|string|max:20',

        ]);

          Student::findOrFail($request->id)->update($data);
          return back();


    }

    public function delete($id){
      
        Student::findOrFail($id)->delete();
        return back();


    }



}
