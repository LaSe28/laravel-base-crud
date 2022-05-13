@extends('templates.base')
@section('mainTitle', $mainTitle)

@push('head')
<script src="{{asset('js/script.js')}}"></script>
@endpush

@section('content')
<div id="popup" class="popup hidden">
    <div class="message">
        <p>
            Sei sicuro di voler eliminare questo {{$comic->type}}?<br>
            {{$comic->title}}
        </p>

        <form method="POST" action="{{route('comics.destroy', $comic->id)}}">
            <div class="btn-container">
                <a id="abort" class="btn btn-edit">Annulla</a>
                @csrf
                @method('DELETE')
                <button id="delete" class="btn btn-destroy">Elimina</button>
            </div>
        </form>
    </div>
</div>
<div>
    <div class="comic-container">
        <img src="{{$comic->image_URL}}" alt="">
        <div class="comic-text">
            <h2>{{$comic->title}}</h2>
            <p>{{$comic->description}}</p>
        </div>
        <div class="btn-container">
            <a class="btn btn-edit" href="{{route('comics.edit', $comic->id)}}">Modifica</a>
            <button id="delBtn" class="btn btn-destroy">Elimina</button>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
@endsection
