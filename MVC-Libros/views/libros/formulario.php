<?php
$action = $_GET['action'] ?? 'crear';
$libroId = $_GET['id'] ?? null;
$libro = ['titulo' => '', 'autor_id' => '', 'año_publicacion' => '', 'genero' => ''];

if ($action == 'editar' && $libroId) {
    // Suponemos que existe un método para obtener un libro por ID
    $libro = $controller->editar($libroId);
}

include '../views/templates/header.php';
?>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?= $action == 'crear' ? 'Nuevo Libro' : 'Editar Libro' ?></h5>
      </div>
      <div class="modal-body">
        <form action="index.php?action=<?= $action == 'crear' ? 'guardar' : 'actualizar' ?>&id=<?= $libroId ?>" method="post">
          <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $libro['titulo'] ?>" required>
          </div>
          <div class="form-group">
            <label for="autor_id">Autor ID</label>
            <input type="text" class="form-control" id="autor_id" name="autor_id" value="<?= $libro['autor_id'] ?>" required>
          </div>
          <div class="form-group">
            <label for="año_publicacion">Año de Publicación</label>
            <input type="number" class="form-control" id="año_publicacion" name="año_publicacion" value="<?= $libro['año_publicacion'] ?>" required>
          </div>
          <div class="form-group">
            <label for="genero">Género</label>
            <input type="text" class="form-control" id="genero" name="genero" value="<?= $libro['genero'] ?>" required>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><?= $action == 'crear' ? 'Crear' : 'Actualizar' ?></button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include '../views/templates/footer.php'; ?>
