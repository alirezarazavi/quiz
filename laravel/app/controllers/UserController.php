<?php

class UserController extends BaseController {

//    public function home() {
//        $questions = Question::findAll();
//        return View::make('user.index')
//                    ->with('questions', $questions);
//    }

    public function login() {
        return View::make('login');
    }

    public function doLogin()
    {
        $rules = array(
            'username' 	=>	'required',
            'password'	=>	'required',
        );
        $messages = array(
            'username.required' =>	'نام کاربری الزامی است',
            'password.required'	=>	'رمز عبور الزامی است',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            $auth = Auth::attempt(array(
                'username' 	=>  Input::get('username'),
                'password' 	=>	Input::get('password')
            ));

            if($auth) {
                return Redirect::route('home');
            }
            else {
                return Redirect::back()->with('message-error','نام کاربری یا رمز عبور اشتباه است')->withInput();
            }

        }
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('login');
    }
}
