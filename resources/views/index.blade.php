<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('movie.search') }}" method="post">
        @csrf
        <input type="text" name="title" required placeholder="Digite aqui um filme para pesquisar" />
        <button type="submit">Pesquisar</button>
    </form>

    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    @foreach($movies as $movie)
        <div>
            <h3>{{$movie->title}}</h3>
            <a href="{{ route('movie.edit', $movie->id) }}"><button>Editar</button></a>
            <div>{{ $movie->country->title }}</div>

            <form action="{{ route('movie.destroy',$movie->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <button>Deletar</button>
            </form>

            <img src="{{ $movie->image }}" style="width:100px;height:100px;" alt="poster do filme">
        </div>
    @endforeach
</body>
</html>
