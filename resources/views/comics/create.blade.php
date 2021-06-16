@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">Create New Comics</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ Route('comics.store')}}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="title" class="control-label">Title</label>
                        {{-- il name e l'id importanti per dati server e cerco di rispettare nomi colonne db --}}
                        <input type="text" class="form-control" id="title" name="title" placeholder=""> 
                    
                    </div>
                </form>
            </div>
        
        </div>


    </div>
@endsection