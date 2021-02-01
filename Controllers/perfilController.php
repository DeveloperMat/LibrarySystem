<?php

require_once("../Dao/library.dao.php");

// $resp =LibraryDAO::insertar();

// if($resp){
//     echo "exito";
// }else {
//     echo "problem";
// }

if (isset($_POST) && !empty($_POST)) {
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $tipo_usuario = intval($_POST['tipo_usuario']);
    
    if ($_FILES['imagen']['error'] > 0) {
    } else {
        $nombre_archivo = $_FILES['imagen']['name'];
        $ruta = "../Public/img/imagenesUsuarios/$nombre_archivo";
        $archivo = $_FILES['imagen']['tmp_name'];
        $subir = move_uploaded_file($archivo, $ruta);
      
    }

   $resp = LibraryDAO::insertarPerfilUsuario($usuario,$pass,$nombre,$apellido,$direccion,$ruta,$tipo_usuario);
     
   if($resp){
     header("Location:../index.php");
   }else {
       echo "No se pudo guardar los datos";
   }
}

// if($resp){
//     echo "datos guardados";
// }else {
//    header("Location:../index.php");
// }


// if($_FILES['imagen']['error']>0){
//     echo "Error al cargar el archivo";
// }else {
//     $permitidos = array("image/jpeg","image/png");
//     $limite_kb = 500;

//     if(in_array($_FILES['imagen']['type'],$permitidos) && $_FILES["imagen"]["size"] <= $limite_kb * 1024){
//         $ruta = "../Public/img/imagenesUsuarios/";
//         $archivo = $ruta.$_FILES["imagen"]['name'];
//         if(!file_exists($ruta)){
//             mkdir($ruta);
//         }
//         if(!file_exists($archivo)){
//             $resultado = @move_uploaded_file($_FILES['imagen']['tmp_name'],$archivo);

//             if($resultado){
//                 echo "Datos Guardados";
//             }else {
//                 echo "No se ha guardado";
//             }
//         }else {
//             echo "Archivo ya existe";
//         }
//     }else {
//         echo "Archivo no permitido o excede el tamaño";
//     }
// }

