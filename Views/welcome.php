<?php include("Include/header.php"); 
require_once("../Controllers/loginController.php");
require_once("../Models/conexion.clase.php");
require_once("../Dao/library.dao.php");
if(empty($_SESSION)){
    header("Location:../index.php");
}

?>
<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
        <?php 
            $user = $_SESSION['user'];
        if($_SESSION['id'] == 2){
            echo "<h3 class='text-center'>Bienvenido Admistrador $user</h3>";
        }else {
          
            echo "<h3 class='text-center'>Bienvenido Usuario $user</h3>";
        }
        
        ?>
        </div>
        <div class="col-md-12 d-flex justify-content-center mt-5">
            <div class="card"  style="width: 23rem;">
                <div class="card-header">
                    <h6 class="text-center">Opciones</h4>
                </div>
                <div class="card-body text-center">
                   <?php if($_SESSION['id'] == 2){
                     echo "<a href='libros.php'>Ver Libros</a>"."</br>";
                     echo "<a href=' insertarLibro.php'>Agregar Libro</a>"."</br>";
                     echo "<a href='añadirEditorial.php'>Añadir Editoriales</a>"."</br>";
                    // echo "<a href='prestamos.php'>Ver prestamos</a>"."</br>";
                     echo "<a href='clientes.php'>Ver clientes</a>"."</br>";
                     echo "<a href='reportes.php'>Reportes</a>" . "</br>";
                   }else {
                    echo "<a href='perfilUsuario.php'>Ver Perfil</a>" . "</br>";
                    echo "<a href='libros.php'>Ver Libros</a>" . "</br>";
                   // echo "<a href='datosUsuarios.php'>Registrar datos</a>";
                   } ?>
                </div>
                <a href="logout.php" class=" text-center">Logout</a>
            </div>
        </div>
    </div>
  
</div>

<?php include_once("Include/footer.php") ?>