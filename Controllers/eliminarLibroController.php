<?php

require_once("../Dao/library.dao.php");

if (isset($_POST) && !empty($_POST)) {
    $id = $_POST['id'];

    $resp = LibraryDAO::eliminarLibro($id);

    if ($resp) {
        header("Location:../Views/libros.php");
    } else {
        $_SESSION['message'] = "<h3 class='alert alert-warning'>El usuario no se encuentra</h3>";
        header("Location:../index.php");
    }
}
