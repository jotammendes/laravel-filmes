<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form-create" method="POST" action="{{ route('movie.update',$movie->id) }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" value="{{ $movie->title}}">
        <input type="text" name="genre" value="{{ $movie->genre }}">
        <input type="text" name="country" value="{{ $movie->country }}">
        <input type="text" name="release" value="{{ $movie->release }}">
        <textarea type="text" name="synopsis">{{ $movie->synopsis }}</textarea>
        <input type="text" name="rating" value="{{ $movie->rating }}">
        <button type="submit">Salvar</button>
        <a href="{{ route('movie.index') }}">Voltar</a>
    </form>
</body>
</html>
