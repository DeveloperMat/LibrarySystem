<?php

class Conexion {
    private static $host = "localhost";
    private static $user = "root";
    private static $pass = "";
    private static $db_name = "proyectouni";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=".self::$host.";dbname=".self::$db_name,self::$user,self::$pass);
            $this->conn->exec("set names utf8");
        } catch (Exception $e) {
            die("Conexion fallida ".$e->getMessage());
        }
    }

    public function ejecutarConsultaUnica($sql){
        $contenedor = $this->conn->prepare($sql);
        return $contenedor;
    }

    public function ejectuarSql($sql){
        $contenedor = $this->conn->query($sql);
        return $contenedor->fetchAll();
    }

    public function ejecuatrActualizacion($sql){
        $this->conn->query($sql);
    }

    public function cerrarConexion(){
        $this->conn = null;
    }

}

$obj = new Conexion;