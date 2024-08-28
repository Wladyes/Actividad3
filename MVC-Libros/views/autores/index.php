<?php
// Incluir el controlador de autores para obtener los datos
require_once '../controllers/AutoresController.php';
$controller = new AutoresController();
$autores = $controller->index();

include '../views/templates/header.php';
?>

<h1>Gestión de Autores</h1>
<a href="formulario.php?action=crear">Agregar Nuevo Autor</a>
<?php include 'lista.php'; ?>

<?php include '../views/templates/footer.php'; ?>
