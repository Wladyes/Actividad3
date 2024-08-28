<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Año de Publicación</th>
            <th>Género</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($libros as $libro): ?>
        <tr>
            <td><?= htmlspecialchars($libro['titulo']) ?></td>
            <td><?= htmlspecialchars($libro['autor_id']) ?></td> <!-- Mejorar mostrando nombre del autor -->
            <td><?= htmlspecialchars($libro['año_publicacion']) ?></td>
            <td><?= htmlspecialchars($libro['genero']) ?></td>
            <td>
                <a href="formulario.php?action=editar&id=<?= $libro['id'] ?>">Editar</a>
                <a href="index.php?action=eliminar&id=<?= $libro['id'] ?>" onclick="return confirm('¿Está seguro de eliminar este libro?');">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
