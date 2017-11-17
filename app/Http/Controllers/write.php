<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class write extends Controller
{
    //
	public function show()
	{
		return view('writeletters');
	}
	public function parse(Request $request)
	{
		$input=$request->all();
		if(!empty($input))
		{
			$r=DB::insert("insert into message(msg_title,msg_accepter,msg_sender,msg_content,msg_time) values(?,?,?,?,now())",[$input['title'],$input['accept'],session('uname'),$input['content']]);
			if($r)
			{
				return redirect('writeletter');
			}
			else
			{
				return redirect('writeletter');
			}
		}

	}
	public function acceptletter()
	{
		$result=DB::select("select * from message where msg_accepter=?",[session('uname')]);
		if(!empty($result))
		{
			return view('acceptletter',['result'=>$result]);
		}
		else
		{
			return view('acceptletter');
		}
	}
	public function sendletter()
	{
		$result=DB::select("select * from message where msg_sender=?",[session('uname')]);
		if(!empty($result))
		{
			return view('sendletter',['result'=>$result]);
		}
		else
		{
			return view('sendletter');
		}
	}
	public function showletter(Request $request,$id)
	{
		$result=DB::select("select * from message where id=?",[$id]);
		if(!empty($result))
		{
			return view('acceptletterdetail',['result'=>$result]);
		}
	}
	public function deleteletter($id)
	{
		$r=DB::delete("delete from message where id=?",[$id]);
		if($r)
		{
			return redirect('home');
		}
		else
			return redirect('showletter',['id'=>$id]);
	}
}
