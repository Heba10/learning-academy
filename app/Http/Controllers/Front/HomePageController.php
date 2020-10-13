<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Trainer;
use App\Student;
use App\Test;

class HomePageController extends Controller
{
    public function index(){
        $data['courses'] = Course::select('id','name','small_desc','category_id','trainer_id','img','price')
        ->orderBy('id','desc')
        ->take(3)
        ->get();


       $data['courses_count'] = Course::count();
       $data['trainers_count'] = Trainer::count();
       $data['students_count'] = Student::count();


       $data['tests'] =Test::select('name', 'spec' ,'desc' , 'img')->get();


        //dd($data);
        return view('front.index')->with($data);
    }
}
