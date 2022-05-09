@extends('templates.base')
@section('mainTitle', $mainTitle)

@section('content')

<div class="comic-container">
    <img src="{{$comic->image_URL}}" alt="">
    <div class="comic-text">
        <h2>{{$comic->title}}</h2>
        <p>{{$comic->description}}</p>
    </div>
</div>


@endsection
