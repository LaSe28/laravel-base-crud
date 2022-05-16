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
                <a id="abort" class="mybtn mybtn-edit">Annulla</a>
                @csrf
                @method('DELETE')
                <button id="delete" class="mybtn mybtn-destroy">Elimina</button>
            </div>
        </form>
    </div>
</div>
<div>
    <div class="overflow-auto container-fluid">
        <div class="row  comic-info justify-content-center">
            <img class="col-lg-4 mb-5 col-md-6 col-sm-4 col-6" src="{{$comic->image_URL}}" alt="">
            <div class="col-lg-6 col-md-10 col-sm-10 col-9" class="comic-text">
                <h2>{{$comic->title}}</h2>
                <p>{{$comic->description}}</p>
            </div>
            <div class="col-4 gap-3 justify-content-center row">
                <a class="mybtn mybtn-edit text-center offset-lg-4 col-lg-2" href="{{route('comics.edit', $comic->id)}}">Modifica</a>
                <button id="delBtn" class="mybtn mybtn-destroy col-lg-2">Elimina</button>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/script.js')}}"></script>
@endsection
