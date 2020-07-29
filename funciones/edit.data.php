<?php
require_once('../db_connection.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $query = "SELECT * FROM tarea_7_CRUD WHERE orden = $id";

    $resultato = mysqli_query($connection, $query);

    if (mysqli_num_rows($resultato) == 1) {
        $row = mysqli_fetch_array($resultato);
        $producto = $row['productos'];
        $usuario = $row['usuarios'];
        $role = $row['roles'];
        $permiso = $row['permisos'];
        $descripcion = $row['descripcion_Prod'];
    }
}
// ACTUALIZA LA TABLA 
if (isset($_POST['actualizar'])) {
    //echo "Actualizando";
   $id = $_REQUEST['id'];
   $Udproducto = $_REQUEST['producto'];
   $Udusuario = $_REQUEST['usuario'];
   $Udrole = $_REQUEST['roles'];
   $Udpermiso = $_REQUEST['permiso'];
   $Uddescripcion = $_REQUEST['descripcionProducto'];
   $query ="UPDATE tarea_7_CRUD SET productos='$Udproducto', usuarios='$Udusuario', roles='$Udrole', permisos='$Udpermiso', descripcion_Prod='$Uddescripcion' WHERE orden = $id";
   mysqli_query($connection, $query);

    $_SESSION['mensaje']= 'Registro Actualizado';
    $_SESSION['mensaje_color']='warning';
   header("location:../includes/index.php");
}
?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <!-- inicio de card -->
            <div class="card card-doby ">
                <form action="edit.data.php?id=<?php echo $_REQUEST['id']; ?>" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="producto" maxlength="50" placeholder="Introduce el Nombre del Producto" value="<?php echo $producto; ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="usuario" maxlength="50" placeholder="Nombre de Usuario" value="<?php echo $usuario; ?>" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="roles" maxlength="10" placeholder="Cual es su rol" value="<?php echo $role; ?>" required>
                    </div>
                    <div class="form-group">
                        <!-- cambiar por una seleccion con radio button -->

                        <input class="form-control" type="text" name="permiso" maxlength="10" placeholder="Nivel de Permiso" value="<?php echo $permiso; ?>" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="descripcionProducto" maxlength="250" placeholder="Descipcion del Producto" rows="2" required><?php echo $descripcion; ?></textarea>
                    </div>
                    <input class="btn btn-success btn-block" name="actualizar" type="submit" value="Actualizar">
                </form>
            </div>
        </div>
        <!-- fin de card -->
    </div>
</div>
</div>
<?php include('../includes/footer.php'); ?>