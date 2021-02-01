<?php 

require_once("../Dao/library.dao.php");

if($_POST && !empty($_POST)){
    $nombre_libro = $_POST['nombre_libro'];
    $autor_libro = $_POST['autor_libro'];
    $genero_libro = $_POST['genero_libro'];
    $editorial = $_POST['editorial'];


    echo $nombre_libro . "</br>";
    echo $autor_libro . "</br>";
    echo $genero_libro . "</br>";
    echo $editorial . "</br>";

    $resp = LibraryDAO::InsertarLibro($nombre_libro,$autor_libro,$genero_libro,$editorial);

    if(!$resp) {
        echo "No se ha podido insertar el libro";
    }else {
        header("Location:../Views/insertarLibro.php");
    }




}