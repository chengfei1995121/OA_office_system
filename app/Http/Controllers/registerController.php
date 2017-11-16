<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    //
    public function show()
    {
    	return view('register');
    }
    public function parse(Request $request)
    {
    	$input=$request->all();
    	if(!empty($input))
    	{
    		$r=DB::insert('insert into members(username,password,realname,subjectid,manageid) value(?,?,?,?,?)',[$input['name'],$input['pass'],$input['realname'],$input['subjectid'],$input['manageid']]);
    		if($r)
    		{
    			return redirect('login');
    		}
    		else
    		{
    			return view('register',['is_error'=>1]);
    		}
    	}
    }
}
