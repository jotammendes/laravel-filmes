@extends('layouts.template')

@section('title', 'Adicionar Filme')

@section('content')
    <form class="form-crud" action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="title">Título</label>
        <input class="input-form" type="text" id="title" name="title" value="{{$movie->title}}" required>
        <label for="genre">Gênero</label>
        <input class="input-form" type="text" id="genre" name="genre" value="{{$movie->genre}}" required>
        <label for="release">Lançamento</label>
        <input class="input-form" type="date" id="release" name="release" value="{{$movie->release}}" required>
        <label for="synopsis">Sinopse</label>
        <textarea class="input-form" id="synopsis" name="synopsis" required>{{$movie->synopsis}}</textarea>
        <label for="rating">Nota</label>
        <input class="input-form" type="text" id="rating" name="rating" value="{{$movie->rating}}" required>
        <label for="country_id">País</label>
        <select class="input-form" id="country_id" name="country_id" required>
            <option value="" disabled selected>-- Escolha um pais --</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}" {{ $country->id==$movie->country_id ? 'selected':'' }}>{{$country->title}}</option>
            @endforeach
        </select>
        <label for="image">Imagem</label>
        <input class="input-form" type="file" id="image" name="image">
        <img src="{{ $movie->image }}" style="width:200px;height:240px; object-fit: cover" alt="poster do filme {{$movie->title}}">
        <button class="button-form" type="submit">Editar Filme</button>
    </form>
    <form action="{{ route('movie.destroy',$movie->id) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Deletar</button>
    </form>
    <a class="button-back" href="{{ route('movie.index') }}">Voltar</a>
@endsection
