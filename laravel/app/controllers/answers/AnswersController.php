<?php

class AnswersController extends BaseController
{

	public function store() {

		if (time() < Session::get('user')) {
			Answer::setAnswers(Input::get('question_id'), Auth::user()->id, Input::get('answer'));
			return Redirect::route('user.home')->with('message-success', 'پاسخ‌های شما ذخیره شد');
		} else {
			return Redirect::route('user.home')->with('message-error', 'خطا! زمان پاسخ‌گویی به این پرسشنامه به پایان رسید!');
		}
	}



}