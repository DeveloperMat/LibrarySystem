<!-- <link rel="stylesheet" href="Public/css/login.css"> -->
<link rel="stylesheet" href="../Public/css/bootstrap.min.css">
<?php require_once("../Dao/library.dao.php")?>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">

        <form action="../Controllers/perfilController.php" method="POST" enctype="multipart/form-data">

            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3 class="text-center">Registro</h3>
                </div>
                <div class="card-body">
                <div class="form-group">
                        <input type="text" name="usuario"  id="" placeholder="Usuario" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" id="" placeholder="Contraseña" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre" id="" placeholder="Nombre" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellido" id="" placeholder="Apellido" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="direccion" id="" placeholder="Direccion" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="imagen">Imagen para su perfil</label>
                        <input type="file" name="imagen" id="imagen" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo</label>
                        <select name="tipo_usuario" id="exampleFormControlSelect2" class="form-control">
                            <?php foreach (LibraryDAO::listarTipoUsuario() as $value) : ?>
                                <?='<option value="' . $value['id_rol'] . '">' . $value['tipo_rol'] . '</option>'; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- <button type="submit" class="btn btn-success">Ingresar</button> -->
                    <button type="submit" class="btn btn-secondary btn-block">Guardar datos</button>
                    

                </div>
            </div>
            <a href="javascript: history.go(-1)">Ir atrás</a>

        </form>
    </div>
</div>



</div>



<?php include_once("Include/footer.php") ?>