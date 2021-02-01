<?php include("Include/header.php"); ?>
<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <form action="../Controllers/librosController.php" method="post">

            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3 class="text-center">Insertar Libro</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="nombre_libro" id="" placeholder="Nombre del libro" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="autor_libro" id="" placeholder="Autor del libro" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="genero_libro" id="" placeholder="Genero del libro" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Editorial</label>
                        <select name="editorial" id="exampleFormControlSelect1" class="form-control">
                            <?php foreach (LibraryDAO::listarEditorial() as $value) : ?>
                                <?='<option value="' . $value['id_editorial'] . '">' . $value['nombre_editorial'] . '</option>'; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- <button type="submit" class="btn btn-success">Ingresar</button> -->
                    <button type="submit" class="btn btn-success">Insertar</button>


                </div>
            </div>
            <a href="javascript: history.go(-1)">Ir atrás</a>

        </form>
    </div>
</div>



</div>



<?php include_once("Include/footer.php") ?>