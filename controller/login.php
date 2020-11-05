<?php
require_once('../Conexion.php');
require_once('../Metodos.php');


if (!empty($_POST)) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $consulta = new Metodos();
    if ($consulta->validar($email, $pass)) {
        header('Location: ../view/formulario.php');
    } else {
        header('Location: ../../regClient/index.php');
    }
} else {
    if (isset($_SESSION['correo'])) {
        unset($_SESSION['correo']);
        unset($_SESSION['nombre']);
        unset($_SESSION['id']);
        session_destroy();
    }
    header('Location: ../../regClient/index.php');
}
