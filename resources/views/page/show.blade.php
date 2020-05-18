@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$page->title}}</h1>
        @if($page->thumb)
            <img src="{{$page->thumb}}" class="img-fluid" alt="{{$page->title}}">
        @endif
        <p>{{$page->text}}</p>
    </div>
@endsection
