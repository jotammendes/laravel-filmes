<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Filme | Adapti PS</title>
</head>

<body>
    <form action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" required value="{{$movie->title}}">
        <input type="text" name="genre" required value="{{$movie->genre}}">
        <input type="text" name="release" required value="{{$movie->release}}">
        <input type="text" name="synopsis" required value="{{$movie->synopsis}}">
        <input type="text" name="rating" required value="{{$movie->rating}}">
        <input type="number" name="country_id" required value="{{$movie->country_id}}">
        <input type="file" name="image">
        <img src="/storage/{{ $movie->image }}" style="width:100px;height:100px;" alt="poster do filme">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
