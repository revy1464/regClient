<?php
require_once('Conexion.php');
if (!isset($_SESSION)) {
    session_start();
}

class Metodos extends Conexion
{

    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function getClientbyCorreo($correo)
    {
        $row = null;
        $stament = $this->db->prepare("SELECT * FROM cliente WHERE correo=:correo");
        $stament->bindParam(':correo', $correo);
        $stament->execute();
        while ($result = $stament->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function getClients()
    {
        $row = null;
        $stament = $this->db->prepare("SELECT * FROM cliente");
        $stament->execute();
        while ($result = $stament->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }




    public function validar($correo, $pass)
    {
        $row = null;
        $stament = $this->db->prepare("SELECT * FROM cliente WHERE correo=:correo LIMIT 1");
        $stament->bindParam(':correo', $correo);
        $stament->execute();

        if ($stament->rowCount() == 1) {
            $result = $stament->fetch(PDO::FETCH_ASSOC);
            if (password_verify($pass, $result["contraseña"])) {
                $_SESSION['nombre'] = $result["nombre"] . " " . $result["apellido"];
                $_SESSION['correo'] = $result["correo"];
                $_SESSION['ID'] = $result['id_cliente'];
                return true;
            }
        }
        return false;
    }
}
