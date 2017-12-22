<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
    //
    public function loginshow()
    {
    	return view('adminlogin');
    }
    public function login(Request $request)
    {
    	$input=$request->all();
    	$result=DB::select("select * from admin where aname=? and password=?",[$input['aname'],$input['pass']]);
    	if($result)
    	{
    		return view('adminhome');
    	}
    	else
    	{
    		echo "no";
    	}
    }
    public function courseplan()
    {
    	$result=DB::select("select * from course");
    	return view('courseplan',['result'=>$result]);

    }
    public function deletecourse($id)
    {
    	$result=DB::delete("delete from course where id=?",[$id]);
    	if($result)
    	{
    		return redirect('courseplan');
    	}
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
    public function managetcr()
    {
    	$result=DB::select("select * from members");
    	return view('teacher',['result'=>$result]);
    }
    public function deleteteacher($id)
    {
    	$result=DB::delete("delete from members where id=?",[$id]);
    	if($result)
    	{
    		return redirect('manageteacher');
    	}
    }
}
