<?php

class Answer extends Eloquent
{

	protected $fillable = array('question_id', 'user_id', 'answer');

	public static function setAnswers(array $questions_id, $user_id, array $answers) {

		for ($i = 0 ; $i < count($questions_id) ; $i++) {
			Answer::create(array(
				'question_id'	=>	$questions_id[$i],
				'user_id'		=>	$user_id,
				'answer'		=>	$answers[$i]
			));
		}

	}

	public static function getUserAnswer() {
//		$allQuestions = Question::where('title', '=', Input::get('title'))->get();
//		$allQuestions = DB::table('answers')
//							->join('questions', 'questions.id', '=', 'answers.question_id')
//							->join('users', 'users.id', '=', 'answers.user_id')
//							->get();
//		foreach($allQuestions as $question) {
//			$user_answers = Answer::where('user_id', '=', Auth::user()->id)->where('question_id', '=', $question->id)->get();
//		}
//		$user_answers = Answer::where('user_id', '=', Auth::user()->id)->where('question_id', '=', $question->id)->get();
		$allAnswers = Answer::all();
		return $allAnswers;
	}

}