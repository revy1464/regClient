<?php
require_once('../model/Cliente.php');

if ($_POST) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['ndocumento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    echo $telefono;

    $Cliente = new Cliente($nombre, $apellido, $tipo_documento, $numero_documento, $telefono, $correo, $contraseña);

    $Cliente->registrar();
}
