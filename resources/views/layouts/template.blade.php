<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: "VT323";
        }
    </style>
</head>
<body>
    <header class="header-container">
        <h6>Adapti Filmes</h6>

        <nav class="nav-container">
            <ul class="nav-items">
                <li><a href="{{ route('movie.index') }}">Início</a></li>
                <li><a href="{{ route('movie.create') }}">Adicionar Filme</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">
        @yield('content')
    </main>

    <footer class="footer-container"></footer>
</body>
</html>