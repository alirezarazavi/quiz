<!doctype html>
<html class="no-js" lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>پرسشنامه</title>
    {{HTML::style('assets/css/normalize.css')}}
    {{HTML::style('assets/css/foundation.min.css')}}
    {{HTML::style('assets/css/foundation-icons.css')}}
    {{HTML::style('assets/css/motion-ui.css')}}
    {{HTML::style('assets/css/app.css')}}
    {{HTML::style('assets/css/screen.css')}}
  </head>
  <body>

	<nav class="top-bar" id="top-bar">
		<div class="top-bar-right">
			<li class="menu-text">
                <a href="{{URL::route('home')}}"><i class="fi-home"></i>  پنل مدیریت پرسشنامه </a>
            </li>
		</div>
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li>
                <a href="#">خوش آمدید، @if (Auth::user()){{Auth::user()->username}}@endif<i class="fi-torso"></i></a>
                <ul class="menu vertical">
                  @if (Auth::user())
                    <li><a href="{{URL::route('logout')}}">خروج</a></li>
                  @else
                    <li><a href="{{URL::route('login')}}">ورود</a></li>
                    {{--<li><a href="#">ثبت نام</a></li>--}}
                  @endif
                </ul>
              </li>
            </ul>
        </div>
	</nav>

    <div class="large-6 large-centered">
      @include('layouts.messages')
    </div>
	<div class="row">
        @yield('content')
    </div>


    {{HTML::script('assets/js/vendor/jquery.min.js')}}
    {{HTML::script('assets/js/foundation.min.js')}}
    {{HTML::script('assets/js/vendor/what-input.min.js')}}
    {{HTML::script('assets/js/vendor/motion-ui.js')}}
    {{HTML::script('assets/js/confirm_with_reveal.js')}}
    {{HTML::script('assets/js/app.js')}}
    {{HTML::script('assets/js/main.js')}}

  </body>
</html>
