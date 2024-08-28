<?php include 'views/templates/header.php'; ?>

<div class="container mt-4">
    <!-- Nombre del Proyecto -->
    <h1>MVC-Libros</h1>

    <div class="integrantes-proyecto">
        <p><strong>Integrantes del Proyecto:</strong></p>
        <ul>
            <li>Wladymir Escobar</li>
            <li>Margarita Fajardo</li>
            <li>Alex Quishpe </li>
        </ul>
    </div>

    <div class="resumen-proyecto">
        <p><strong>Resumen:</strong></p>
        <p>Este proyecto es una aplicación web para gestionar libros y autores. Utiliza el patrón MVC en PHP, integra peticiones AJAX con Axios, y ofrece una interfaz diseñada con Bootstrap. Los formularios de creación y edición de registros se gestionan mediante modales, y la navegación se realiza a través de un menú dinámico.</p>
    </div>
    <!-- Enlaces hacia la gestión de libros y autores -->
    <div class="mt-4">
        <a href="/MVC-Libros/libros" class="btn btn-primary">Gestión de Libros</a>
        <a href="/MVC-Libros/autores" class="btn btn-primary">Gestión de Autores</a>
    </div>
</div>

<?php include 'views/templates/footer.php'; ?>
