<?php
require_once 'models/UserModel.php';
$model = new UserModel();

//Probar getAll
echo "<h2>Listado desde Modelo</h2>";
$users = $model->getAll();
foreach ($users as $u) {
    echo "{$u['nombre']} - {$u['email']} <br>";
}

//Probar Create
$model->create("Pedro Test", "pedro@test.com");
echo "<p>Usuario creado exitosamente.</p>";
?>