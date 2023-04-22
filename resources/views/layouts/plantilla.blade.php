<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
   {{-- <title>{{ $title }} ?? "Valor por defecto"</title>--}}
</head>
<body>
<nav class="navbar">
    <ul class="menu__list r-list">
        <li class="menu__group"><a class="menu__link r-link text-underlined" href="/artist">Todos los artistas</a></li>
        <li class="menu__group"><a class="menu__link r-link text-underlined" href="/show-artist">Listar artistas</a></li>
        <li class="menu__group"><a class="menu__link r-link text-underlined" href="/new-artist-form">Nuevo artista</a></li>
        <li class="menu__group"><a class="menu__link r-link text-underlined" href="/edit-artist-form">Editar artista</a></li>

    <ul>
</nav>
    @yield('content');
    
</body>
</html>