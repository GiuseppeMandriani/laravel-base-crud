@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">Our Comics</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th colspan="3">Actions</th>
            </tr>
            
        </thead>
        <tbody>
        @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a class="btn btn-success"href="{{ route('comics.show', $comic->id)}}">Details</a>
                </td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $comics->links() }}
    </div>
    </div>
@endsection