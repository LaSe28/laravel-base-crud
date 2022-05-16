@extends('templates.base')
@section('mainTitle', 'Create new comic')

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
    <form method="POST" action="{{route('comics.store')}}">
        @csrf
        <div class="input-container">
            <div>
                <label for="title">Title</label>
                <input id="title" name="title" type="text">
            </div>
            <div>
                <label for="image_URL">Image_URL</label>
                <input id="image_URL" name="image_URL" type="text">
            </div>
            <div>
                <label for="type">Type</label>
                <input id="type" name="type" type="text">

            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="4"></textarea>
            </div>
        </div>
        <button class="mybtn" type="submit">Crea!</button>
    </form>
</div>

@endsection
