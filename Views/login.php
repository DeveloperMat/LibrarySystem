
<link rel="stylesheet" href="Public/css/bootstrap.min.css">
<link rel="stylesheet" href="Public/css/login.css">
<div class="container">
    <div class="row justify-content-center align-items-center">
          
        <form action="Controllers/loginController.php" method="post">

            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="user" id="" placeholder="usuario" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="pass" id="" placeholder="pass" class="form-control" required>
                    </div>
                    <!-- <button type="submit" class="btn btn-success">Ingresar</button> -->
                    <button type="submit" class="btn btn-primary">Login</button>
                    <small>Aún no tienes cuenta? crea una <a href="Views/registrarUsuario.php">aquí</a></small>
                </div>
            </div>

        </form>
    </div>
</div>


<?php include_once("Include/footer.php") ?>