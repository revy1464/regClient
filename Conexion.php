<?php
class Conexion
{
    protected $db;
    private $driver = "mysql";
    private $host = "localhost";
    private $bd = "clienteproimpo";
    private $usuario = "root";
    private $password = "";

    public function __construct()
    {
        try {
            $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->bd}", $this->usuario, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (\Throwable $th) {
            echo "Error al conectarse a la base de datos" . $th->getMessage();
        }
    }
}
