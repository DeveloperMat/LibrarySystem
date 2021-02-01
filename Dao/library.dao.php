<?php

require_once("../Models/conexion.clase.php");

class LibraryDAO
{

    public static function compararLogin($usuario, $password)
    {
        $con = new Conexion;
        $cont = $con->ejecutarConsultaUnica("SELECT * FROM usuarios WHERE usuario = :user AND password = :pass ");
        $cont->execute(array(":user" => $usuario, ":pass" => $password));
        $fila = $cont->fetch(PDO::FETCH_ASSOC);
        if ($fila) {
            $_SESSION['id'] = $fila['id_rol_u'];
            $_SESSION['idUsuario'] = $fila['id_usuario'];
            return $cont;
        } else {
            return 0;
        }
        $con->cerrarConexion();
    }

    public static function listarLibros()
    {
        $con = new Conexion;
        // $id = $_SESSION['id'];
        $cont = $con->ejecutarConsultaUnica("SELECT * FROM libros INNER JOIN editorial ON libros.id_editorial_l = editorial.id_editorial");
        $cont->execute();
        return $cont;
    }

    public static function listarLibroPorId($valor)
    {
        $con = new Conexion;
        $cont = $con->ejecutarConsultaUnica("SELECT * FROM libros INNER JOIN editorial ON libros.id_editorial_l = editorial.id_editorial WHERE libros.id_libro = $valor");
        // $cont = $con->ejecutarConsultaUnica("SELECT * FROM libros WHERE id_libro  = $valor");
        $cont->execute();
        $fila = $cont->fetchAll();
        return $fila;
    }

    public static function listarEditorial()
    {
        $con = new Conexion;
        $cont = $con->ejectuarSql("SELECT * FROM editorial");

        return $cont;
    }

    public static function listarPerfilUsuarioUnico()
    {
        $con = new Conexion;
        $name = $_SESSION['user'];
        $cont = $con->ejecutarConsultaUnica("SELECT * FROM usuarios WHERE usuario = '$name' ");
        $cont->execute();

        return $cont;
    }

    public static function listarPerfilUsuario()
    {
        $con = new Conexion;
        $cont = $con->ejectuarSql("SELECT * FROM usuarios WHERE id_rol_u = 1");
        return $cont;
    }

    public static function listarTipoUsuario()
    {
        $con = new Conexion;
        $cont = $con->ejectuarSql("SELECT * FROM rol WHERE id_rol = 1");
        return $cont;
    }

    public static function listarLibrosPrestados(){
        $con = new Conexion;
        $cont = $con->ejecutarConsultaUnica("SELECT * FROM prestamos INNER JOIN usuarios ON prestamos.id_usuario_prestamo = id_usuario");
        // $cont = $con->ejecutarConsultaUnica("SELECT * FROM libros WHERE id_libro  = $valor");
        $cont->execute();
        return $cont;
    }

    public static function listarLibroAdquirido(){
        $con = new Conexion;
        $id = $_SESSION['idUsuario'];
        $cont = $con->ejectuarSql("SELECT * FROM prestamos WHERE id_usuario_prestamo = '$id'");
        return $cont;
    }

    public static function insertarPerfilUsuario($usuario, $password, $nombre, $apellido, $direccion, $imagen, $tipo_usuario)
    {
        $con = new Conexion;

        $con->ejecuatrActualizacion("INSERT INTO usuarios(usuario,password,nombre,apellido,direccion,imagen,id_rol_u) VALUES ('$usuario','$password','$nombre','$apellido','$direccion','$imagen',$tipo_usuario)");

        return $con;

        $con->cerrarConexion();
    }

    public static function insertarEditorial($editorial)
    {
        $con = new Conexion;
        $con->ejecuatrActualizacion("INSERT INTO editorial(nombre_editorial) VALUES ('$editorial')");

        return $con;

        $con->cerrarConexion();
    }

    public static function insertarLibro($nombre_libro, $autor_libro, $genero_libro, $editorial)
    {
        $con = new Conexion;
        $con->ejecuatrActualizacion("INSERT INTO libros(nombre,autor,genero,id_editorial_l) VALUES ('$nombre_libro','$autor_libro','$genero_libro','$editorial')");

        return $con;

        $con->cerrarConexion();
    }

    public static function adquirir_prestamo($nombre_libro, $genero_libro, $fecha_prestamo, $fecha_entrega)
    {
        $con = new Conexion;
        session_start();
       $id = $_SESSION['idUsuario'];
        $con->ejecuatrActualizacion("INSERT INTO prestamos(nombre_libro,genero_libro,fecha_prestamo,fecha_entrega,id_usuario_prestamo) VALUES ('$nombre_libro','$genero_libro','$fecha_prestamo','$fecha_entrega','$id')");
        
        
        return $con;

        $con->cerrarConexion();
    }

    public static function actualizarLibro($nombre_libro,$autor_libro,$genero_libro,$editorial, $id){
        $con = new Conexion;
        $con->ejecuatrActualizacion("UPDATE libros SET nombre='$nombre_libro', autor='$autor_libro',genero='$genero_libro',id_editorial_l = '$editorial' WHERE id_libro = $id");

        return $con;

        $con->cerrarConexion();
    }

    public static function eliminarLibro($id){
        $con = new Conexion;
        $con->ejecuatrActualizacion("DELETE FROM libros WHERE id_libro = $id");

        return $con;

        $con->cerrarConexion();
    }


}
