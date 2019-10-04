@extends('layouts.master')
@section('content')
<div class="row">
    <div class="large-5 large-offset-3 columns">
        <div class="callout primary">
            <p>یک پرسشنامه جدید بسازید</p>
            <form role="form" action="{{URL::route('questions.create')}}" method="get">
                <div class="input-group">
                    <input type="text" class="input-group-field" name="title" required placeholder="عنوان پرسشنامه" value="{{Input::old('title')}}" />
                    <div class="input-group-button">
                        <input type="submit" class="button primary float-left" value="ایجاد" />
                    </div>
                </div>
            </form>
        </div>
        @foreach ($questions as $question)
            <div class="callout primary">
                <div>
                    <a href="questions/create?title={{$question->title}}" class="">{{$question->title}}</a>
                    <a href="questions/delete/{{$question->title}}" data-confirm="گزینه مورد نظر حذف خواهد شد. آیا مطمئن هستید؟" class="float-left"><i class="fi-trash"></i></a>
                </div>
            </div>
        @endforeach
    </div>

    @include('layouts.sidebar')
</div>
@stop
