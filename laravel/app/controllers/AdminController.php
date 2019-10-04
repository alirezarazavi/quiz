<?php

class AdminController extends BaseController {

	public function index() {
        $questions = Question::findAll();
        $allUsers = User::getAllUsers();
        return View::make('index')
                    ->with('questions', $questions)
                    ->with('allUsers', $allUsers);
    }

    public function showUser() {
        $questions = Question::findAll();
        $user = User::getUser(Input::get('uid'));
        return View::make('user_answers.show')
                    ->with('questions', $questions)
                    ->with('user', $user);
    }

    public function showUserAnswers() {
        $user_id = Input::get('uid');
        $title = Input::get('question');
        $question = Question::getQuestions($title);
        $user = User::find($user_id);
        $userAnswers = array();
        foreach($question as $item) {
            $userAnswers[] = Answer::where('question_id', '=', $item->id)->where('user_id', '=', $user_id)->get();
        }
        return View::make('user_answers.answers')
                        ->with('questions', $question)
                        ->with('userAnswers', $userAnswers)
                        ->with('user', $user);
    }


}
