@extends('layouts.master')

@section('title','詳細資料')

@section('content')
		<div class="page-header">
			<h1>詳細資料</h1>
		</div>
		<div class="row">
			
			<p>
				學號：123456
			</p>
			<p>
				姓名：小明
			</p>
			
			<p>
				電話：0912345678
			</p>
			@if(is_null($subject) || $subject=='chinese')
			<p>
				國文：60
			</p>
			@endif
			@if(is_null($subject) || $subject=='english')
			<p>
				英文：60
			</p>
			@endif
			@if(is_null($subject) || $subject=='math')
			<p>
				數學：60
			</p>
			@endif
		</div>
	
@stop