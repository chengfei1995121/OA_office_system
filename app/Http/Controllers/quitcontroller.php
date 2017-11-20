<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quitcontroller extends Controller
{
    //
    public function quit(Request $request)
    {
    	$request->session()->forget('uname');
    	return redirect('/');
    }
}
