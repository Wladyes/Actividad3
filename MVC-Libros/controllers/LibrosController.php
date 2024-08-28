<?php
require_once 'models/Libro.php';

class LibrosController {

    public function index() {
        // Obtener todos los libros
        $libro = new Libro();
        $libros = $libro->fetchAll();

        // Cargar la vista
        require_once 'views/libros/index.php';
    }

    public function crear() {
        // Mostrar el formulario de creación
        require_once 'views/libros/formulario.php';
    }

    public function guardar() {
        // Guardar el libro en la base de datos
        $titulo = $_POST['titulo'];
        $autor_id = $_POST['autor_id'];
        $año_publicacion = $_POST['año_publicacion'];
        $genero = $_POST['genero'];

        $libro = new Libro();
        $libro->save($titulo, $autor_id, $año_publicacion, $genero);

        // Redireccionar a la lista de libros
        header('Location: ' . BASE_URL . '/libros');
    }

    public function editar() {
        // Obtener el libro y mostrar el formulario de edición
        $id = $_GET['id'];
        $libro = new Libro();
        $libro = $libro->findById($id);

        require_once 'views/libros/formulario.php';
    }

    public function actualizar() {
        // Actualizar el libro en la base de datos
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor_id = $_POST['autor_id'];
        $año_publicacion = $_POST['año_publicacion'];
        $genero = $_POST['genero'];

        $libro = new Libro();
        $libro->update($id, $titulo, $autor_id, $año_publicacion, $genero);

        // Redireccionar a la lista de libros
        header('Location: ' . BASE_URL . '/libros');
    }

    public function eliminar() {
        // Eliminar el libro
        $id = $_GET['id'];
        $libro = new Libro();
        $libro->delete($id);

        // Redireccionar a la lista de libros
        header('Location: ' . BASE_URL . '/libros');
    }
}
