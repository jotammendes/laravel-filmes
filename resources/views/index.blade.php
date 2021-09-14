@extends('layouts.template')

@section('title', 'Filmes | Adapti PS')

@section('content')
    <form class="form-search" action="{{ route('movie.search') }}" method="post">
        @csrf
        <input class="input-search" type="text" name="title" required placeholder="Digite aqui um filme para pesquisar" />
        <button class="button-search" type="submit">Pesquisar</button>
    </form>

    @foreach($movies as $movie)
        <div class="card-movie">
            <h3>{{$movie->title}}</h3>
            <div class="buttons-container">
                <a href="{{ route('movie.edit', $movie->id) }}">Editar</a>
                <form action="{{ route('movie.destroy',$movie->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit">Deletar</button>
                </form>
            </div>

            <img src="{{ $movie->image }}" style="width:100px;height:100px;" alt="poster do filme">

            <div class="info-container">
                <p class="specify genre">{{$movie->genre}}</p>
                <p class="specify country"><strong>País:</strong> {{$movie->country->title}}</p>
                <p class="specify release"><strong>Lançamento:</strong> {{$movie->release}}</p>
                <p class="specify rating"><strong>Nota:</strong> {{$movie->rating}}</p>
                <p class="specify synopsis"><strong>Sinopse:</strong> {{$movie->synopsis}}</p>
            </div>
        </div>
    @endforeach
@endsection
