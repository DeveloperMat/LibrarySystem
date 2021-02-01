<?php include("Include/header.php"); ?>
<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">

<div class="container mt-5">
    <h3 class="text-center">Libros</h3>
    <div class="row justify-content-center align-items-center">
        <table class="table text-center">
            <thead>
                <tr>

                    <th scope="col">Libro</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Editorial</th>
                    <th scope='col'>acciones</th>


                </tr>
            </thead>
            <tbody>
                <?php foreach (LibraryDAO::listarLibros() as $libro) : ?>
                    <tr>
                        <td><?= $libro['nombre']; ?></td>
                        <td><?= $libro["autor"] ?></td>
                        <td><?= $libro["genero"] ?></td>
                        <td><?= $libro["nombre_editorial"] ?></td>
                        <?php 
                            if($_SESSION['id'] == 2){
                               echo "<td><a href='editarLibro.php?id=$libro[id_libro]' class='btn btn-primary'>Editar</a> <a href='eliminarLibro.php?id=$libro[id_libro]' class='btn btn-danger text-white'>Eliminar</a></td>";
                            }else {
                                echo "<td><a href='adquirirPrestamo.php?id=$libro[id_libro]' class='btn btn-primary text-white'>Adquirir Prestamo</a></td>";
                            }
                        ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <tbody>
            <a href="javascript: history.go(-1)">Ir atrás</a>
    </div>
</div>


<?php include_once("Include/footer.php") ?>