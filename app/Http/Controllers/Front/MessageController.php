<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\newsletters;
use App\message;
use App\Student;
class MessageController extends Controller
{
    public function newsletter(Request $request)
    {
    
      
         $data = $request->validate([
            'email' => 'required|email'

    ]);
         
    newsletters::create($data);
    return back();

    }


    public function contact(Request $request)
    {
    
      
         $data = $request->validate([
            'email' => 'required|email|max:191',
            'name' => 'required|string|max:191',
            'subject' => 'nullable|string|max:191',
            'message' => 'required|string|max:10000',

    ]);
         
    message::create($data);
    return back();

    }



    public function enroll(Request $request)
    {
    
      
         $data = $request->validate([
            'email' => 'required|email|max:191',
            'name' => 'required|string|max:191',
            'speciality' => 'nullable|string|max:191',
            'course_id' => 'required|exists:courses,id',

    ]);

    $student =Student::create([
          'name' =>$data['name'],
          'email' =>$data['email'],
          'speciality' =>$data['speciality'],




    ]);

    $student_id =$student->id;
         

    DB::table('course_student')->insert([
        'course_id' => $data['course_id'],
         'student_id' =>$student_id,
         'created_at' =>now(),
         'updated_at' =>now(),

       ]);
       
  
    return back();

    }


}
