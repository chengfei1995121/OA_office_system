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
   
}
