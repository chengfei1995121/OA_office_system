<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class articlecontroller extends Controller
{
    //
    public function show()
    {
    	$result=DB::select("select * from article order by id desc limit 10");
    	return view('articlelist',['result'=>$result]);
    }
    public function addarticle(Request $request)
    {
    	$input=$request->all();
    	$r=DB::insert("insert into article(title,author,content,write_time) values(?,?,?,now())",[$input['title'],session('uname'),$input['content']]);
    	if($r)
    	{
    		return view('addarticle');
    	}
    	else
    		return "no";
    }
}
