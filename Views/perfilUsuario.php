<?php include("Include/header.php"); ?>
<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">


    <a href="javascript: history.go(-1)">Ir atrás</a>
        <div class="card" style="width: 100%;">
            <div class="card-header">
                <?= "<h2 class='text-center'>", "Welcome usuario: " . $_SESSION['user'] . "</h2>"; ?>
            </div>

            <div class="card-body text-center">
                <?php foreach (LibraryDAO::listarPerfilUsuarioUnico() as $value) : ?>
                    <?= "<img src='" . $value['imagen'] . "' width='200'>" . "</br>" ?>
                    <?= "<h3>" . $value['nombre'] . " " . $value['apellido'] . "</h3>" . "</br>" ?>
                    <?= "<h6>" . $value['direccion'] . "</h6>" . "<br>" ?>
                <?php endforeach; ?>
                <h6>Libros Adquiridos</h6>
                <?php foreach (LibraryDAO::listarLibroAdquirido() as $valor) : ?>
                    <table class="table text-center">
                        <thead class="text-center">
                            <tr>

                                <th scope="col">Libro</th>
                                <th scope="col">Fecha de prestamo</th>
                                <th scope="col">Fecha de entrega</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $valor['nombre_libro']; ?></td>
                                <td><?= $valor["fecha_prestamo"] ?></td>
                                <td><?= $valor["fecha_entrega"] ?></td>

                            </tr>
                        </tbody>
                    <?php endforeach; ?>
                    
            </div>
            
        </div>
        
    </div>
    

</div>



</div>



<?php include_once("Include/footer.php") ?>