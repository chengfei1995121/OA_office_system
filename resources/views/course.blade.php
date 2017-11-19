@extends('home')
@section('title','课程表')
@section('content')
<table class="table table-bordered table-hover">
	<tr>
	<td>时间</td>
	<td>星期一</td>
	<td>星期二</td>
	<td>星期三</td>
	<td>星期四</td>
	<td>星期五</td>
	</tr>
	@php
		$num=count($result);
		$jiesum=1;
	@endphp
	@for($i=0;$i<$num;$i++)
	@php
		$jie=$result[$i]->course_time;
	@endphp
	<tr>
		@while($jiesum<$jie)
		<tr>
		<td style="width: 20px;">{{$arr[$jiesum-1]}}</td>
		<td><div class="course"></div></td>
		<td><div class="course"></div></td>
		<td><div class="course"></div></td>
		<td><div class="course"></div></td>
		<td><div class="course"></div></td>
		</tr>
		@php
		$jiesum++;
		@endphp
		@endwhile
		<td style="width: 20px;">{{$arr[$jie-1]}}</td>
		@php
			$sum=1;
			$jiesum++;
		@endphp
		@for($j=$i;$j<$num&&$result[$j]->course_time==$jie;$j++)
			@if($result[$j]->course_day==1)
				<td><div class="course"><p>{{$result[$j]->course_name}}</p>
				<p>{{$result[$j]->course_teacher}}</p>
				<p>{{$result[$j]->course_address}}</p>
				</div></td>
				@php
					$sum++;
				@endphp
			@endif
			@if($result[$j]->course_day==2)
				@while($sum<2)
					@php 
					$sum++;
					@endphp
					<td><div class="course"><p></p></div></td>
				@endwhile
				<td><div class="course"><p>{{$result[$j]->course_name}}</p>
				<p>{{$result[$j]->course_teacher}}</p>
				<p>{{$result[$j]->course_address}}</p>
				</div></td>
				@php
					$sum++;
				@endphp
			@endif
			@if($result[$j]->course_day==3)
				@while($sum<3)
					@php 
					$sum++;
					@endphp
					<td><div class="course"><p></p></div></td>
				@endwhile
				<td><div class="course"><p>{{$result[$j]->course_name}}</p>
				<p>{{$result[$j]->course_teacher}}</p>
				<p>{{$result[$j]->course_address}}</p>
				</div></td>
				@php
					$sum++;
				@endphp
			@endif
			@if($result[$j]->course_day==4)
				@while($sum<4)
					@php 
					$sum++;
					@endphp
					<td><div class="course"><p></p></div></td>
				@endwhile
				<td><div class="course"><p>{{$result[$j]->course_name}}</p>
				<p>{{$result[$j]->course_teacher}}</p>
				<p>{{$result[$j]->course_address}}</p>
				</div></td>
				@php
					$sum++;
				@endphp
			@endif
			@if($result[$j]->course_day==5)
				@while($sum<5)
					@php 
					$sum++;
					@endphp
					<td><div class="course"><p></p></div></td>
				@endwhile
				<td><div class="course"><p>{{$result[$j]->course_name}}</p>
				<p>{{$result[$j]->course_teacher}}</p>
				<p>{{$result[$j]->course_address}}</p>
				</div></td>
				@php
					$sum++;
				@endphp
			@endif
			@php
			$i=$j;
			@endphp
		@endfor
		@php
			$s=$sum;
		@endphp
		@while($s<=5)
			@php
			$s++;
			@endphp
			<td><div class="course"><p></p></div></td>
		@endwhile
	</tr>
	@endfor
	@while($jie<7)
		@php
		$jie++;
		@endphp
		<tr>
			<td>{{$arr[$jie-1]}}</td>
			<td><div class="course"></div></td>
			<td><div class="course"></div></td>
			<td><div class="course"></div></td>
			<td><div class="course"></div></td>
			<td><div class="course"></div></td>
		</tr>
	@endwhile
	</table>
@endsection