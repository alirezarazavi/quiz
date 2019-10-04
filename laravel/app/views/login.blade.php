@extends('layouts.master')
@section('content')
    <div class="row" id="login_form">
      <div class="large-4 large-centered columns">
      	<ul class="tabs" data-tabs id="login-tabs">
      		<li class="tabs-title is-active"><a href="#login" aria-selected="true">ورود</a></li>
      		{{--<li class="tabs-title"><a href="#signup">ثبت نام</a></li>--}}
      	</ul>
      	<div class="tabs-content" data-tabs-content="login-tabs">
      		<div class="tabs-panel is-active" id="login">
                <form role="form" action="{{URL::route('login')}}" method="post">
                    <div class="input-group">
                        <span class="input-group-label"><label for="username"><i class="fi-torso"></i></label></span>
                        <input type="text" class="input-group-field" id="username" name="username" placeholder="نام کاربری" value="{{Input::old('username')}}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-label"><label for="password"><i class="fi-key"></i></label></span>
                        <input type="password" class="input-group-field" id="password" name="password" placeholder="رمز عبور">
                    </div>
                    <div class="input-group-button">
                        <input type="submit" class="button expanded" value="ورود">
                    </div>
                </form>
	        </div>
	        {{--<div class="tabs-panel" id="signup">--}}
				{{--<input type="text" placeholder="نام کاربری">--}}
				{{--<input type="email" placeholder="ایمیل">--}}
		        {{--<input type="password" placeholder="رمز عبور">--}}
		        {{--<input type="password" placeholder="تکرار رمز عبور">--}}
		        {{--<input type="submit" class="button" value="ثبت نام">--}}
	        {{--</div>--}}
        </div>
      </div>
    </div>
@stop