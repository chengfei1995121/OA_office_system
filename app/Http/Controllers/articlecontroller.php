<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class articlecontroller extends Controller
{
    //
    public function show($id=1)
    {
    	if($id>1)
    		$start=($id-1)*2;
    	else
    		$start=0;
    	$result=DB::select("select * from article order by id  limit ?,2",[$start]);
    	return view('articlelist',['result'=>$result,'id'=>$id]);
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
    public function articledetail($id)
    {
    	$result=DB::select("select * from article where id=?",[$id]);
    	return view('articledetail',['result'=>$result]);
    }
}
