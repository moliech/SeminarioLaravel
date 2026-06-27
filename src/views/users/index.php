<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>¡Logrado!</strong> Usuario creado exitosamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <h1>Usuarios Registrados</h1>
    <a href="index.php?action=create" class="btn btn-primary mb-3">+ Crear Nuevo</a>
    <table class="table table-striped">
        <thead>
            <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            <?php if (isset($users) && is_array($users)): ?>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['nombre']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="index.php?action=delete&id=<?= $user['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">No hay usuarios registrados.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>