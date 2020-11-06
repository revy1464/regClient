<?php
require_once('../model/Cliente.php');

if (!isset($_SESSION)) {
    session_start();
}

if ($_POST) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['ndocumento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $Cliente = new Cliente($nombre, $apellido, $tipo_documento, $numero_documento, $telefono, $correo, $contraseña);

    if (isset($_SESSION['correo'])) {
        $Cliente->modificar();
    } else {
        $Cliente->registrar();
    }
}
