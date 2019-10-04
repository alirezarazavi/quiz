@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="large-8 large-centered">
			<p>
				<a href="../user?uid={{$user->id}}" class="clearfix"><i class="fi-arrow-right"></i> بازگشت</a>
				<a class="button primary hollow float-left print"><i class="fi-print"></i>  چاپ</a>
			</p>
			<div id="print_area">
				<p>پرسشنامه: {{$questions[0]->title}}</p>
				<p>کاربر: {{$user->username}}</p>
				<table class="hover report">
					<thead>
						<tr>
							<th width="300">سوال</th>
							<th width="500">پاسخ</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($questions as $question)
						<tr>
							<td>{{$question->question}}</td>
							@foreach($userAnswers as $answer)
								@foreach($answer as $ans)
									@if ($ans->question_id == $question->id)
										<td>{{$ans->answer}}</td>
									@endif
								@endforeach
							@endforeach
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>

		{{--<div class="small-4 columns">--}}
			{{--<div class="callout success">--}}
				{{--<dl>--}}
					{{--<dd>نام کاربری: </dd>--}}
					{{--<dt>{{$user->username}}</dt>--}}
					{{--<dd>ایمیل: </dd>--}}
					{{--<dt>{{$user->email}}</dt>--}}
				{{--</dl>--}}
			{{--</div>--}}
		{{--</div>--}}

	</div>
@stop

