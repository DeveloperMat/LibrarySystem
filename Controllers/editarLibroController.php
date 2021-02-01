<?php

require_once("../Dao/library.dao.php");

if (isset($_POST) && !empty($_POST)) {
    $id = $_POST['id'];
    $nombre_libro = $_POST['nombre_libro'];
    $autor_libro = $_POST['autor_libro'];
    $genero_libro = $_POST['genero_libro'];
    $editorial = $_POST['editorial'];

    $resp = LibraryDAO::actualizarLibro($nombre_libro,$autor_libro,$genero_libro,$editorial,$id);

    if ($resp) {
        header("Location:../Views/libros.php");
    } else {
        $_SESSION['message'] = "<h3 class='alert alert-warning'>El usuario no se encuentra</h3>";
        header("Location:../index.php");
    }
}
