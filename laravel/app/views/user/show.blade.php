@extends('layouts.master')
@section('content')
<div class="row">
	<div class="large-8 columns">
		<div class="callout primary">
			<form role="form" action="{{URL::route('user.answers.store')}}" method="post">
				<p>
					<a href="{{URL::route('home')}}" class="clearfix"><i class="fi-arrow-right"></i> بازگشت</a>
				</p>
				<div class="callout warning"><h4>{{$questions[0]->title}}</h4></div>
				@foreach ($questions as $question)
					<?php $already_answered = false; ?>
					@foreach($userAnswers as $answer) @if ($answer->question_id == $question->id && $answer->user_id == Auth::user()->id) <?php $already_answered = true; ?> @endif @endforeach
					<input type="hidden" name="question_id[]" value="{{$question->id}}" />
					<hr/>
					<h6>{{$question->question}}</h6>
					<div class="quiz-container">
						<div class="input-group">
							<p>
								<textarea type="text" class="input-group-field answer_textarea" name="answer[]" placeholder="پاسخ شما...">@foreach($userAnswers as $answer)@if($answer->question_id == $question->id && $answer->answer !== " "){{$answer->answer}}@endif @endforeach</textarea>
							</p>
						</div>
					</div>
				@endforeach
				<input type="submit" class="button success float-left" @if ($already_answered) value="قبلا پاسخ داده‌اید" disabled @else value="ذخیره"  @endif />
				<i class="clearfix"></i>
			</form>
		</div>
	</div>

	@include('layouts.user_sidebar_warning_box')
</div>
@stop
