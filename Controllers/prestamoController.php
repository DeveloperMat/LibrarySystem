<?php 

require_once("../Dao/library.dao.php");

if($_POST && !empty($_POST)){
    $nombre_libro = $_POST['nombre_libro'];
    $genero_libro = $_POST['genero_libro'];
    $fecha_prestamo = $_POST['fecha_prestamo'];
    $fecha_entrega = $_POST['fecha_entrega'];
    
    $resp = LibraryDAO::adquirir_prestamo($nombre_libro,$genero_libro,$fecha_prestamo,$fecha_entrega);

    if($resp){
      header("Location:../Views/perfilUsuario.php");
    }else {
        echo "No se ha podido realizar la operación";
    }

}