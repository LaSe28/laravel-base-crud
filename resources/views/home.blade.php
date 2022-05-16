@extends('templates.base')
@section('mainTitle', 'Comics list')

@section('content')

    <div class="container-sm ">
        <div class="row justify-content-center">
            @foreach ($comics as $comic)
                <div class="card col-lg-2 col-md-3 col-5 mx-2 my-3">
                    <a href="{{route('comics.show', $comic->id)}}"><img src="{{$comic->image_URL}}" alt=""></a>
                    <h4><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></h4>
                    <p class="fs-5">{{$comic->type}}</p>
                    <div class="btn-container">
                        <a class="mybtn mybtn-edit" href="{{route('comics.edit', $comic->id)}}">Modifica</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pages">
            {{$comics->links()}}
        </div>
    </div>



@endsection
