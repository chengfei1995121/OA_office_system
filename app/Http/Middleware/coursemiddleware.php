<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;

class coursemiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $input=$request->all();
        $result=DB::select("select * from course where course_teacher=? and course_time=? and course_day=?",[$input['course_teacher'],$input['course_time'],$input['course_day']]);
        if(empty($result))
        {
            return $next($request);
        }
        else
        {
            return redirect('adderror');
        }
    }
}
