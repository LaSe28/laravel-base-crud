@extends('templates.base')
@section('mainTitle', 'Edit comic')

@section('content')


<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{route('comics.update', $comic->id)}}">
        @csrf
        @method('PUT')
        <div class="input-container">
            <div>
                <label for="title">Title</label>
                <input id="title" name="title" type="text" value="{{$comic->title}}">
            </div>
            <div>
                <label for="image_URL">Image_URL</label>
                <input id="image_URL" name="image_URL" type="text" value="{{$comic->image_URL}}" >
            </div>
            <div>
                <label for="type">Type</label>
                <input id="type" name="type" type="text" value="{{$comic->type}}">

            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="4">{{$comic->description}}</textarea>
            </div>
            <div class="btn-container">
                <button class="mybtn" type="submit">Salva le modifiche</button>
                <a class="mybtn" href="{{ url()->previous() }}">Annulla</a>
            </div>
        </div>
    </form>
</div>


@endsection
