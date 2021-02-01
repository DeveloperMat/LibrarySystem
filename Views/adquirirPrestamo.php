<?php include("Include/header.php"); ?>
<?php
$fcha = date("Y-m-d");

$fecha = date('Y-m-d');
$nuevafecha = strtotime('next month', strtotime($fecha));
$nueva = date('Y-m-d', $nuevafecha);
if (isset($_GET['id'])) {
    $valor = $_GET['id'];
    $libro = LibraryDAO::listarLibroPorId($valor);
}

?>


<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <form action="../Controllers/prestamoController.php" method="post">
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3 class="text-center">Adquirir libro</h3>
                </div>
                <div class="card-body">
                    <?php foreach ($libro as $key => $value) : ?>
                        <div class="form-group">
                            <input type="text" name="nombre_libro" id="" class="form-control" value="<?php echo $value['nombre'] ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" name="genero_libro" id="" value="<?php echo $value['genero'] ?>" class="form-control">
                        </div>
                        <label for="fechaPrestamo">Fecha de prestamo</label>
                        <div class="form-group">
                            <input type="date" class="form-control" name="fecha_prestamo" value="<?php echo $fcha; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fechaEntrega">Fecha Entrega</label>
                        <input type="date" name="fecha_entrega" id="" value="<?php echo $nueva; ?>" class="form-control" readonly >
                        </div>
                        <!-- <button type="submit" class="btn btn-success">Ingresar</button> -->
                        <button type="submit" class="btn btn-success btn-block">Adquirir</button>
                    <?php endforeach; ?>

                </div>
            </div>
            <a href="javascript: history.go(-1)" class="btn btn-secondary">Ir atrás</a>

        </form>
    </div>
</div>



</div>



<?php include_once("Include/footer.php") ?>