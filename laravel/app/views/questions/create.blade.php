@extends('layouts.master')
@section('content')
	<div class="large-8 large-centered" xmlns="http://www.w3.org/1999/html">
		<div class="callout primary">
			<form role="form" action="{{URL::route('questions.store')}}" method="post">
				<p>
					<a href="{{URL::route('home')}}" class="clearfix"><i class="fi-arrow-right"></i> بازگشت</a>
				</p>
				<h4>{{Input::get('title')}}</h4>
				<hr/>
				<div class="quiz-container">
					<div class="input-group">
						<input type="hidden" name="title" value="{{Input::get('title')}}" />
						<p>
							<textarea type="text" class="input-group-field" name="question" placeholder="سوال جدید">{{Input::old('question')}}</textarea>
						</p>
						{{--<label><input type="checkbox" disabled name="multi_ans" id="multi_ans" /> چندگزینه‌ای</label>--}}

						<div class="multi_ans_input_container">
							<div class="medium-6 columns">
								<div class="input-group">
									<span class="input-group-label">2</span>
									<input type="text" class="input-group-field" size="5" name="multi_ans_2" value="{{Input::old('multi_ans_2')}}" />
								</div>
							</div>
							<div class="medium-6 columns">
								<div class="input-group">
									<span class="input-group-label">1</span>
									<input type="text" class="input-group-field" size="5" name="multi_ans_1" value="{{Input::old('multi_ans_1')}}" />
								</div>
							</div>
							<div class="medium-6 columns">
								<div class="input-group">
									<span class="input-group-label">4</span>
									<input type="text" class="input-group-field" size="5" name="multi_ans_4" value="{{Input::old('multi_ans_4')}}" />
								</div>
							</div>
							<div class="medium-6 columns">
								<div class="input-group">
									<span class="input-group-label">3</span>
									<input type="text" class="input-group-field" size="5" name="multi_ans_3" value="{{Input::old('multi_ans_3')}}" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<input type="submit" class="button primary float-left" value="ذخیره" />
				<i class="clearfix"></i>
			</form>
		</div>
		<div class="large-11 large-centered">
			<h5>سوالات</h5>
			@foreach ($questions as $question)
				<div class="callout warning">
					{{$question->question}}
					<a href="create/delete/{{$question->id}}" data-confirm="گزینه مورد نظر حذف خواهد شد. آیا مطمئن هستید؟" class="float-left"><i class="fi-trash"></i></a>
				</div>
			@endforeach
		</div>
	</div>
@stop
