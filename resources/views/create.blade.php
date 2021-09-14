@extends('layouts.template')

@section('title', 'Adicionar Filme')

@section('content')
    <form class="form-crud" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Título</label>
        <input class="input-form" type="text" id="title" name="title" required>
        <label for="genre">Gênero</label>
        <input class="input-form" type="text" id="genre" name="genre" required>
        <label for="release">Lançamento</label>
        <input class="input-form" type="date" id="release" name="release" required>
        <label for="synopsis">Sinopse</label>
        <textarea class="input-form" id="synopsis" name="synopsis" required></textarea>
        <label for="rating">Nota</label>
        <input class="input-form" type="text" id="rating" name="rating" required>
        <label for="country_id">País</label>
        <select class="input-form" id="country_id" name="country_id" required>
            <option value="" disabled selected>-- Escolha um pais --</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{$country->title}}</option>
            @endforeach
        </select>
        <label for="image">Imagem</label>
        <input class="input-form" type="file" id="image" name="image" required>
        <button class="button-form" type="submit">Criar Filme</button>
        <a class="button-back" href="{{ route('movie.index') }}">Voltar</a>
    </form>
@endsection
