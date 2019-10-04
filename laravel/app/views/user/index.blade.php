@extends('layouts.master')
@section('content')
<div class="row">
	<div class="large-5 large-offset-3 columns">
		<h4>پرسشنامه‌ها</h4>
		@foreach ($questions as $question)
			<div class="callout primary">
				<div>
					<a href="user/questions?title={{$question->title}}" class="">{{$question->title}}</a>
				</div>
			</div>
		@endforeach
	</div>

	@include('layouts.user_sidebar_warning_box')
</div>
@stop
