<?php
//Este archivo es el punto de entrada de la aplicación
require_once __DIR__ . '/controllers/UserController.php';

$controller = new UserController();

//Leer la accion desde la URL
$action=$_GET['action'] ?? 'index';

//Enrutamiento basico
//?action=index&success=1
if ($action === 'index') {
    $controller->index();
} elseif ($action === 'create') {
    $controller->create();
} elseif ($action === 'delete') {
    $controller->delete();
} elseif ($action === 'edit') {
    $controller->edit();
} else {
    echo "Pagina no encontrada";
}
?>