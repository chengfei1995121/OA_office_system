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
    	$result=DB::select("select * from members,managements where members.manageid=managements.manageid");
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
    public function depmanage()
    {
    	$result=DB::select("select * from managements");
    	return view('department',['result'=>$result]);
    }
    public function add_department(Request $request)
    {
    	$input=$request->all();
    	$result=DB::insert("insert into managements(manageid,managename,managetel) values(?,?,?)",[$input['dep_id'],$input['dep_name'],$input['dep_tel']]);
    	if($result)
    	{
    		return redirect('department');
    	}
    	else
    	{

    	}
    }
    public function delete_dep($id)
    {
    	$result=DB::delete("delete from managements where id=?",[$id]);
    	if($result)
    	{
    		return redirect('department');
    	}
    	else
    	{

    	}
    }
    public function managearticle($id=1)
    {
    	if($id>1)
    		$start=($id-1)*2;
    	else
    		$start=0;
    	$result=DB::select("select * from article order by id  limit ?,2",[$start]);
    	return view('managearticle',['result'=>$result,'id'=>$id]);
    }
    public function deletearticle($id)
    {
    	$result=DB::delete('delete from article where id=?',[$id]);
    	if($result)
    	{
    		return redirect('managearticle');
    	}
    }
    public function classsets()
    {
    	$result=DB::select("select * from classsets");
    	return view('classet',['result'=>$result]);
    }
    public function addclass(Request $request)
    {
    	$input=$request->all();
    	$result=DB::insert("insert into classsets(gradeid,classname,classnumber) values(?,?,?)",[$input['id'],$input['classname'],$input['classnumber']]);
    	if($result)
    	{
    		return redirect('classsets');
    	}
    	else
    	{

    	}
    }
    public function deleteclass($id)
    {
    	$result=DB::delete("delete from classsets where id=?",['$id']);
    	if($result)
    	{
    		return redirect('classsets');
    	}
    	else
    	{
    		
    	}
    }
}
