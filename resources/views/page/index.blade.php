@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @foreach($pages as $page)
            <div class="col-6 mb-4 d-flex">
                <div class="card">
                    @if($page->thumb)
                        <img src="{{$page->thumb}}" class="card-img-top" alt="{{$page->title}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$page->title}}</h5>
                        <p class="card-text">{{$page->description}}</p>
                    </div>
                    <div class="card-footer text-right bg-white">
                        <a href="{{route('pages.show', $page)}}" class="btn btn-primary">подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        {{ $pages->links() }}
    </div>
@endsection
