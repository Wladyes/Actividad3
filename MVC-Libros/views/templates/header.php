<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Libros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="/MVC-Libros/public/css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Aquí se implementa el logo -->
        <a class="navbar-brand" href="/MVC-Libros">
            <img src="/MVC-Libros/public/images/logo.png" alt="Logo" style="width: 50px; height: auto;">
            MVC-Libros
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/MVC-Libros">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="/MVC-Libros/libros">Libros</a></li>
                <li class="nav-item"><a class="nav-link" href="/MVC-Libros/autores">Autores</a></li>
            </ul>
        </div>
    </nav>
</header>
<main class="container mt-4">
