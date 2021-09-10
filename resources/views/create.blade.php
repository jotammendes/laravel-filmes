<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Filme | Adapti PS</title>
</head>

<body>
    <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" required>
        <input type="text" name="genre" required>
        <input type="text" name="release" required>
        <input type="text" name="synopsis" required>
        <input type="text" name="rating" required>
        <select name="country_id" required>
            <option value="" disabled selected>-- Escolha um pais --</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{$country->title}}</option>
            @endforeach
        </select>
        <input type="file" name="image" required>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
