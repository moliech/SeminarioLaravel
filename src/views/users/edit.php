<?php
// Validación defensiva: Si no vienes desde el controlador, redirige o detén el script
if (!isset($user) || !$user) {
    die("Error: No se puede cargar el formulario de edición directamente. Por favor, accede a través de index.php?action=edit&id=ID");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h1>Editar Usuario</h1>
    <form method="POST" action="index.php?action=edit">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        
        <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?= htmlspecialchars($user['nombre']) ?>" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="index.php?action=index" class="btn btn-secondary">Volver</a>
    </form>
</body>
</html>
