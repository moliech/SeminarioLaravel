<?php
require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new UserModel();
    }

    //Accion para listar usuarios
    public function index() {
        $users = $this->model->getAll();
        //Cargar la vista y pasarle los datos
        require_once __DIR__ . '/../views/users/index.php';
    }

    //Accion para mostrar el formulario o guardar
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Guardar el usuario
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $this->model->create($nombre, $email);
            header('Location: index.php?action=index&success=1');
        } else {
            //Mostrar el formulario
            require_once __DIR__ . '/../views/users/create.php';
        }
    }

    //accion para eliminar
    public function delete(){
        if (isset($_GET['id'])){
            $this->model->delete($_GET['id']);
            header('Location: index.php?action=index');
            exit();
        }
    }

    //accion para editar
    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Actualizar el usuario
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $this->model->update($id, $nombre, $email);
            header('Location: index.php?action=index');
        } else {
            //Mostrar el formulario con los datos del usuario
            if (isset($_GET['id'])) {
                $user = $this->model->getById($_GET['id']);
                require_once __DIR__ . '/../views/users/edit.php';
            } else {
                echo "Usuario no encontrado";
            }
        }
    }
}
?>