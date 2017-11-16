<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class loginController extends Controller
{
	public function show()
	{
		return view('login');
	}
	public function parse(Request $request)
	{
		$name=$request->input('name');
		$pass=$request->input('pass');
		$m=DB::select('select * from members where username=? and password=?',[$name,$pass]);
		if(empty($m))
			return view('login',['is_error'=>1]);
		else
		{	
			session(['uname'=>$name]);
			return redirect('home');
		}
    //
	}
}