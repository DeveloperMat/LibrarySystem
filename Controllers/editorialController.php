<?php
require_once("../Dao/library.dao.php");
if(isset($_POST) && !empty($_POST)) {
    $editorial = $_POST['editorial'];

   $resp = LibraryDAO::insertarEditorial($editorial);
     
   if($resp){
     header("Location:../Views/Welcome.php");
   }else {
       echo "No se pudo guardar los datos";
   }
}