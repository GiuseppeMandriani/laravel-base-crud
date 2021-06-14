@extends('layouts.main')

@section('content')
    <section class="container">
        <h1 class="text-center">Details</h1>

        <div class="row">
            <h3>{{ $comic->title }}</h3>
            <div class="col-md-2 offset-md-2">
                <img src="{{$comic->image}}" alt="{{$comic->title}}">
            </div>
            <div class="col-md-6">
                {!! $comic->description !!}
            </div>
        
            <a href="{{route('comics.index')}}">back</a>
        </div>

    </section>
@endsection
