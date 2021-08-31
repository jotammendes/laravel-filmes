<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form id="form-create" method="POST" action="{{ route('movie.search') }}" enctype="multipart/form-data">
        @csrf
        <input id="title" name="title" type="text"></input>
        <button type="submit">Pesquisar</button>
    </form>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    @foreach($movies as $movie)
        <div>
            <h3>{{$movie->title}}</h3>
            <img src="/storage/{{ $movie->image }}" style="width:100px;height:100px;">
            <a href="{{ route('movie.edit', $movie->id) }}">Editar</a>
            <a href="{{ route('movie.destroy', $movie->id) }}">Deletar</a>
        </div>
    @endforeach
</body>
</html>
