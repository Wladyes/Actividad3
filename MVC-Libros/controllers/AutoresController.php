<?php
require_once 'models/Autor.php';

class AutoresController {

    public function index() {
        // Obtener todos los autores
        $autor = new Autor();
        $autores = $autor->fetchAll();

        // Cargar la vista
        require_once 'views/autores/index.php';
    }

    public function crear() {
        // Mostrar el formulario de creación
        require_once 'views/autores/formulario.php';
    }

    public function guardar() {
        // Guardar el autor en la base de datos
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nacionalidad = $_POST['nacionalidad'];

        $autor = new Autor();
        $autor->save($nombre, $apellido, $nacionalidad);

        // Redireccionar a la lista de autores
        header('Location: ' . BASE_URL . '/autores');
    }

    public function editar() {
        // Obtener el autor y mostrar el formulario de edición
        $id = $_GET['id'];
        $autor = new Autor();
        $autor = $autor->findById($id);

        require_once 'views/autores/formulario.php';
    }

    public function actualizar() {
        // Actualizar el autor en la base de datos
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $nacionalidad = $_POST['nacionalidad'];

        $autor = new Autor();
        $autor->update($id, $nombre, $apellido, $nacionalidad);

        // Redireccionar a la lista de autores
        header('Location: ' . BASE_URL . '/autores');
    }

    public function eliminar() {
        // Eliminar el autor
        $id = $_GET['id'];
        $autor = new Autor();
        $autor->delete($id);

        // Redireccionar a la lista de autores
        header('Location: ' . BASE_URL . '/autores');
    }
}
