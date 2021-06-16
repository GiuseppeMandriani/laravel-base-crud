@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">Create New Comics</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('comics.store')}}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="title" class="control-label">Title</label>
                        {{-- il name e l'id importanti per dati server e cerco di rispettare nomi colonne db --}}
                        <input type="text" class="form-control" id="title" name="title" placeholder=""> 
                    
                    </div>


                    <div class="mb-3">
                        <label for="description" class="control-label">Description</label>
                        {{-- il name e l'id importanti per dati server e cerco di rispettare nomi colonne db --}}
                        <textarea  class="form-control" id="description" name="description" placeholder="" rows="6"></textarea>
                    
                    </div>


                    <div class="mb-3">
                        <label for="type" class="control-label">Type</label>
                        {{-- il name e l'id importanti per dati server e cerco di rispettare nomi colonne db --}}
                        <select class="form-control" name="type" id="type">
                            <option value="comic book">Comic Book</option>
                            <option value="graphic novel">Graphic Novel</option>
                        </select>
                    
                    </div>

                    <div class="mb-3">
                        <label for="image" class="control-label">Url Image</label>
                        {{-- il name e l'id importanti per dati server e cerco di rispettare nomi colonne db --}}
                        <input type="text" class="form-control" id="image" name="image" placeholder=""> 
                    
                    </div>

                    <button type="submit" class="btn btn-primary">Create Comic</button>


                </form>
            </div>
        
        </div>


    </div>
@endsection