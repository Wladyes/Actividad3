<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nacionalidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($autores as $autor): ?>
        <tr>
            <td><?= htmlspecialchars($autor['nombre']) ?></td>
            <td><?= htmlspecialchars($autor['apellido']) ?></td>
            <td><?= htmlspecialchars($autor['nacionalidad']) ?></td>
            <td>
                <a href="formulario.php?action=editar&id=<?= $autor['id'] ?>">Editar</a>
                <a href="index.php?action=eliminar&id=<?= $autor['id'] ?>" onclick="return confirm('¿Está seguro de eliminar este autor?');">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
