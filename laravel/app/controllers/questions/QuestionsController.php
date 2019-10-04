<?php

class QuestionsController extends BaseController {

	public function create() {
		$title = Input::get('title');
		if (!$title && Question::getQuestion($title)) {
			return Redirect::route('home')->with('message-error', 'عنوان تکراری است.')->withInput();
		} else {
			$questions = Question::getQuestions($title);
			return View::make('questions.create')
					->with('questions', $questions);
		}
	}

	public function store() {
		$title = Input::get('title');
		$question = Input::get('question');
		$multi_ans_1 = Input::get('multi_ans_1');
		$multi_ans_2 = Input::get('multi_ans_2');
		$multi_ans_3 = Input::get('multi_ans_3');
		$multi_ans_4 = Input::get('multi_ans_4');
		if ($title != null && $question != null) {
			Question::setQuestion($title, $question, $multi_ans_1, $multi_ans_2, $multi_ans_3, $multi_ans_4);

			return Redirect::back();
		} else {
			return Redirect::back()->with('message-error','همه گزینه ها اجباری است.')->withInput();
		}
	}

	public function destroy($title) {
		Question::destroyQuestions($title);
		return Redirect::back()->with('message-success', 'گزینه مورد نظر حذف شد');
	}

	public function destroyOneQuestion($id) {
		Question::destroyOneQuestion($id);
		return Redirect::back();
	}


	public function index() {
		$questions = Question::findAll();
		return View::make('user.index')
					->with('questions', $questions);
	}

	public function show() {
//		Set session for time limit to answer questions
		Session::put('user', time() + (45 * 60));
//		var_dump(Session::get('user') . " " . time());
		$title = Input::get('title');
		$user_answers = Answer::getUserAnswer();
		$questions = Question::getQuestions($title);
		return View::make('user.show')
					->with('questions', $questions)
					->with('userAnswers', $user_answers);
	}

}