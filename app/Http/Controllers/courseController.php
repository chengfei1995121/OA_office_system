<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class courseController extends Controller
{
    //
    public function show()
    {
    	$arr=array("第一节","第二节","第三节","第四节","第五节","第六节","第七节");
    	$result=DB::select("select * from course where course_teacher=? order by course_time,course_day",["成飞"]);
    	return view('course',['result'=>$result,'arr'=>$arr]);
    }
    public function addcourse(Request $request)
    {
    	$input=$request->all();
    	$r=DB::insert("insert into course(course_name,course_teacher,course_class,course_address,course_time,course_day) values(?,?,?,?,?,?)",[$input['course_name'],$input['course_teacher'],$input['course_class'],$input['course_address'],$input['course_time'],$input['course_day']]);
    	if($r)
    	{
    		return view('addcourse');
    	}
    }
    public function showerror()
    {
    	return view('addcourseerror');
    }
}
