<?php
// Incluir el controlador de libros para obtener los datos
require_once '../controllers/LibrosController.php';
$controller = new LibrosController();
$libros = $controller->index();

include '../views/templates/header.php';
?>

<h1>Gestión de Libros</h1>
<a href="formulario.php?action=crear">Agregar Nuevo Libro</a>
<?php include 'lista.php'; ?>

<?php include '../views/templates/footer.php'; ?>
