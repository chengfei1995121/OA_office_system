<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class scheduleController extends Controller
{
    //
    public function show()
    {
    	$result=DB::select("select * from schedule where 1 order by id desc");
    	if(!empty($result))
    		return view('schedule',['result'=>$result]);
    	else
    	{
    		return view('schedule');
    	}
    }
    public function addwork()
    {
    	return view('addwork');
    }
    public function insertwork(Request $request)
    {
    	$input=$request->all();
    	$r=DB::insert("insert into schedule(start_time,end_time,content,user) values(?,?,?,?)",[$input['start_time'],$input['end_time'],$input['content'],session('uname')]);
    	if($r)
    	{
    		return redirect('schedule');
    	}
    	else
    	{
    		return redirect('schedule/addwork');
    	}
    }
    public function complete($id)
    {
    	$r=DB::update("update schedule set status=1 where id=?",[$id]);
    	return redirect('schedule');
    }
}
