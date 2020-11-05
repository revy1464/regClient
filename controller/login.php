<?php
require_once('../Conexion.php');
require_once('../Metodos.php');


if (!empty($_POST)) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    echo $email . $pass;
    $consulta = new Metodos();
    if ($consulta->validar($email, $pass)) {
        header('Location: ../view/formulario.php');
    } else {
        echo "Error";
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
