<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Course;

class CourseController extends Controller
{
    public function cat($id){
     //Category::where('id',$id)->first();
     $data['cat'] =Category::findOrFail($id);
    //  $data['courses'] =Course::where('category_id',$id)->get();
    $data['courses'] =Course::where('category_id',$id)->paginate(3);

     return view('front.courses.cat')->with($data);


    }

    public function show($id,$c_id){
        //$data['course'] =Course::where('id',$c_id)->first();
      
        $data['course'] =Course::findOrFail($c_id);

        return view('front.courses.show')->with($data);

    }



}
