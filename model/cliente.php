<?php

require_once("../Conexion.php");
require_once("../Metodos.php");
if (!isset($_SESSION)) {
    session_start();
}
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
        $consulta = new Metodos();
        $row = $consulta->getClientbyCorreo($this->correo);
        if (sizeof($row) <= 0) {
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
                //$_SESSION['mensaje'] = "Registrado con Exito";
                header('Location: ../controller/consultar.php');
            } else {
                //$_SESSION['mensaje'] = "El cliente ya no se puedo registrar, intente de nuevo";
                header('Location: ../../regClient/error.php');
            }
        } else {
            //$_SESSION['mensaje'] = "El cliente ya esta registrado, intente de nuevo";

            header('Location: ../../regClient/error.php');
        }
    }

    public function modificar()
    {

        $stament = $this->db->prepare("UPDATE cliente SET nombre=:nombre, apellido=:apellido, tipo_documento=:tipo_documento, telefono=:telefono,  correo=:correo, contraseña=:contrasena WHERE correo=:correo");

        //$stament = $this->db->prepare("INSERT INTO cliente(nombre, apellido, tipo_documento, numero_documento, telefono, correo, contraseña)VALUES (:nombre, :apellido, :tipo_documento, :numero_documento, :telefono, :correo, :contrasena)");

        $password = password_hash($this->contraseña, PASSWORD_DEFAULT);

        $stament->bindParam(':nombre', $this->nombre);
        $stament->bindParam(':apellido', $this->apellido);
        $stament->bindParam(':tipo_documento', $this->tipo_documento);
        $stament->bindParam(':numero_documento', $this->numero_documento);
        $stament->bindParam(':telefono', $this->telefono);
        $stament->bindParam(':correo', $this->correo);
        $stament->bindParam(':contrasena', $password);
        if ($stament->execute()) {
            //$_SESSION['mensaje'] = "Modificado con Exito";
            header('Location: ../controller/consultar.php');
        } else {
            ///$_SESSION['mensaje'] = "El cliente no se puedo registrar, intente de nuevo";
            header('Location: ../controller/formulario.php');
        }
    }
}
