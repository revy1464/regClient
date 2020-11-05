<?php

require_once("../Conexion.php");
session_start();
class Cliente extends Conexion
{

    public $nombre;
    public $apellido;
    public $tipo_documento;
    public $numero_documento;
    public $telefono;
    public $correo;
    public $contraseña;

    public function __construct($nombre, $apellido, $tipo_documento, $numero_documento, $telefono, $correo, $contraseña)
    {
        $this->db = parent::__construct();
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipo_documento = $tipo_documento;
        $this->numero_documento = $numero_documento;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
    }

    public function registrar()
    {
        $stament = $this->db->prepare("INSERT INTO cliente(nombre, apellido, tipo_documento, numero_documento, telefono, correo, contraseña)VALUES (:nombre, :apellido, :tipo_documento, :numero_documento, :telefono, :correo, :contrasena)");

        $password = password_hash($this->contraseña, PASSWORD_DEFAULT);

        $stament->bindParam(':nombre', $this->nombre);
        $stament->bindParam(':apellido', $this->apellido);
        $stament->bindParam(':tipo_documento', $this->tipo_documento);
        $stament->bindParam(':numero_documento', $this->numero_documento);
        $stament->bindParam(':telefono', $this->telefono);
        $stament->bindParam(':correo', $this->correo);
        $stament->bindParam(':contrasena', $password);
        if ($stament->execute()) {
            header('Location: ../controller/consultar.php');
        } else {
            header('Location: ../controller/formulario.php');
        }
    }
}
