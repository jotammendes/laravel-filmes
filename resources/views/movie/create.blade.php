<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="form-create" method="POST" action="{{ route('movie.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title">
        <input type="text" name="genre">
        <input type="text" name="country">
        <input type="text" name="release">
        <input type="text" name="synopsis">
        <input type="text" name="rating">
        <button type="submit">Salvar</button>
        <a href="{{ route('movie.index') }}">Voltar</a>
    </form>
</body>
</html>
