<?php include("Include/header.php"); ?>
<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <form action="../Controllers/editorialController.php" method="post">

            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3 class="text-center">Añadir Editorial</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="editorial" id="" placeholder="Editoriales" class="form-control" required>
                    </div>

                    <!-- <button type="submit" class="btn btn-success">Ingresar</button> -->
                    <button type="submit" class="btn btn-success btn-block">Insertar</button>


                </div>
            </div>
            <a href="javascript: history.go(-1)">Ir atrás</a>

        </form>
    </div>
</div>



</div>



<?php include_once("Include/footer.php") ?>