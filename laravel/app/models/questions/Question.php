<?php
class Question extends Eloquent {

	protected $fillable = array('title','question', 'multi_ans_1', 'multi_ans_2', 'multi_ans_3', 'multi_ans_4', 'created_by');

	public static function setQuestion($title, $question, $multi_ans_1, $multi_ans_2, $multi_ans_3, $multi_ans_4) {
//		$date = new \DateTime;
//		DB::table('questions')->insert(array(
//			'title'	=>	$title,
//			'question' =>	$question,
//			'multi_ans_1'	=>	$multi_ans_1,
//			'multi_ans_2'	=>	$multi_ans_2,
//			'multi_ans_3'	=>	$multi_ans_3,
//			'multi_ans_4'	=>	$multi_ans_4,
//			'created_by'	=> 	"admin",
//			'created_at'	=> 	$date
//		));

		$question = Question::create(array(
			'title'	=>	$title,
			'question' =>	$question,
			'multi_ans_1'	=>	$multi_ans_1,
			'multi_ans_2'	=>	$multi_ans_2,
			'multi_ans_3'	=>	$multi_ans_3,
			'multi_ans_4'	=>	$multi_ans_4,
			'created_by'	=> 	Auth::user()->username
		));
		$question->save();
	}

	public static function getQuestion($title) {
		return Question::where('title', '=', $title)->first();
	}

	public static function getQuestions($title) {
		return Question::where('title', '=', $title)->orderBy('created_at')->get();
	}

	public static function findAll() {
		$questions = DB::table('questions')
						->groupBy('title')
						->orderBy('created_at', 'desc')
						->get();
		return $questions;
	}

	public static function destroyQuestions($title) {
		Question::where('title', '=', $title)->delete();
	}

	public static function destroyOneQuestion($id) {
		Question::where('id', '=', $id)->delete();
	}

}