<?php
$action = $_GET['action'] ?? 'crear';
$autorId = $_GET['id'] ?? null;
$autor = ['nombre' => '', 'apellido' => '', 'nacionalidad' => ''];

if ($action == 'editar' && $autorId) {
    // Suponemos que existe un método para obtener un autor por ID
    $autor = $controller->editar($autorId);
}

include '../views/templates/header.php';
?>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?= $action == 'crear' ? 'Nuevo Autor' : 'Editar Autor' ?></h5>
      </div>
      <div class="modal-body">
        <form action="index.php?action=<?= $action == 'crear' ? 'guardar' : 'actualizar' ?>&id=<?= $autorId ?>" method="post">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $autor['nombre'] ?>" required>
          </div>
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $autor['apellido'] ?>" required>
          </div>
          <div class="form-group">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" value="<?= $autor['nacionalidad'] ?>" required>
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
