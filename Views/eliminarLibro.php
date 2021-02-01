<?php include("Include/header.php"); ?>
<?php

if (isset($_GET['id'])) {
    $valor = $_GET['id'];

    $libro = LibraryDAO::listarLibroPorId($valor);
}

?>


<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <form action="../Controllers/eliminarLibroController.php" method="post">
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3 class="text-center">¿Seguro que deseas eliminar el libro?</h3>
                </div>
                <div class="card-body">
                    <?php foreach ($libro as $key => $value) : ?>
                    <input type="hidden" name="id" id="" value="<?php echo $value['id_libro'] ?>">
                        <div class="form-group">
                            <input type="text" name="nombre_libro" id="" placeholder="Nombre del libro" value="<?php echo $value['nombre'] ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="autor_libro" id="" placeholder="Autor del libro" value="<?php echo $value['autor'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="genero_libro" id="" placeholder="Genero del libro" value=" <?php echo $value['genero']?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Editorial</label>
                            <select name="editorial" id="exampleFormControlSelect1" class="form-control">
                                 <option value="<?php echo $value['id_editorial'] ?>"><?php echo $value['nombre_editorial'] ?></option>
                               
                            </select>
                        </div>
                        <!-- <button type="submit" class="btn btn-success">Ingresar</button> -->
                        <button type="submit" class="btn btn-danger btn-block">Eliminar</button>
                    <?php endforeach; ?>

                </div>
            </div>
            <a href="javascript: history.go(-1)">Ir atrás</a>

        </form>
    </div>
</div>



</div>



<?php include_once("Include/footer.php") ?>