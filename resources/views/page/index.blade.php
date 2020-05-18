@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @foreach($pages as $page)
            <div class="col-6 mb-4">
                <div class="card">
                    <img src="https://picsum.photos/1920/1080" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$page->title}}</h5>
                        <p class="card-text">{{$page->description}}</p>
                        <a href="{{route('pages.show', $page)}}" class="btn btn-primary">подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        {{ $pages->links() }}
    </div>
@endsection
