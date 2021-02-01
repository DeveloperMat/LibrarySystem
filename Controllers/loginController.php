<?php

require_once("../Dao/library.dao.php");
session_start();

if(isset($_POST) && !empty($_POST)){
    $user = $_POST['user'];
    $password = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $_SESSION['user'] = $user;
    
    $resp = LibraryDAO::compararLogin($user,$password,$nombre,$apellido,$direccion);

    if($resp){
        header("Location:../Views/welcome.php");
    }else {
        $_SESSION['message'] = "<h3 class='alert alert-warning'>El usuario no se encuentra</h3>";
        header("Location:../index.php");
    }
}