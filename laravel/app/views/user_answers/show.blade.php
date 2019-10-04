@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="large-5 large-offset-3 columns">
			<p>
				<a href="{{URL::route('home')}}" class="clearfix"><i class="fi-arrow-right"></i> بازگشت</a>
			</p>
			<h5>پرسشنامه‌ها</h5>
			<div class="callout primary">
				@foreach ($questions as $question)
					<div class="callout secondary">
						<div>
							<a href="user/questions?uid={{$user->id}}&question={{$question->title}}" class="">{{$question->title}}</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>

		<div class="small-4 columns">
			<div class="callout success">
				<dl>
					<dd>نام کاربری: </dd>
					<dt>{{$user->username}}</dt>
					<dd>ایمیل: </dd>
					<dt>{{$user->email}}</dt>
				</dl>
			</div>
		</div>
	</div>
@stop
