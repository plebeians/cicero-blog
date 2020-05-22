@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">

        <h1>Pages list</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($pages as $page)
                <tr>
                    <th scope="row">{{$page->id}}</th>
                    <td>{{$page->title}}</td>
                    <td>{{$page->created_at}}</td>
                    <td>{{$page->updated_at}}</td>
                    <td><a href="{{route('pages.show', $page)}}" class="link" target="_blank"><i class="fas fa-eye"></i></a>
                    </td>
                    <td><a href="#" class="link"><i class="fas fa-edit"></i></a></td>
                    <td>
                        <form method="POST" action="{{route('dashboard.pages.destroy', $page)}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-link p-0"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $pages->links() }}

    </div>
@endsection
