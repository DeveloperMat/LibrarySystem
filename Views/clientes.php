<?php include("Include/header.php"); 
if(empty($_SESSION)){
    header("Location:../index.php");
}

?>
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">

<div class="container mt-5">
<h3 class="text-center">Clientes</h3>
    <div class="row justify-content-center align-items-center">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Imagen</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach (LibraryDAO::listarPerfilUsuario() as $usuario) : ?>
                <tr >
                    <th scope="row"> <?= $usuario['id_usuario']?></th>
                    <td><?= $usuario['nombre']; ?></td>
                    <td><?= $usuario["apellido"] ?></td>
                    <td><?= $usuario["direccion"] ?></td>
                    <td><?= "<img src='" . $usuario['imagen'] . "' width='200'>" . "</br>" ?></td>
                   
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <tbody>
    <a href="javascript: history.go(-1)">Ir atrás</a>
    </div>
</div>


<?php include_once("Include/footer.php") ?>