<?php include("Include/header.php"); ?>
<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <form action="../Controllers/perfilController.php" method="post" enctype="multipart/form-data">

            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3 class="text-center">Registrar mis datos</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="nombre" id="" placeholder="Nombre completo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellido" id="" placeholder="Apellido" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="direccion" id="" placeholder="Direccion" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label for="imagen">Imagen de perfil</label>
                        <input type="file" name="imagen" id="imagen" class="form-control" required>
                    </div>
                    <!-- <button type="submit" class="btn btn-success">Ingresar</button> -->
                    <button type="submit" class="btn btn-success btn-block">Guardar datos</button>


                </div>
            </div>
            <a href="javascript: history.go(-1)">Ir atrás</a>

        </form>
    </div>
</div>



</div>



<?php include_once("Include/footer.php") ?>