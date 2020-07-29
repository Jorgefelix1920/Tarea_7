<?php
require_once('../db_connection.php');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $query = "SELECT * FROM usuarios WHERE ID = $id";

    $resultato = mysqli_query($connection, $query);

    if (mysqli_num_rows($resultato) == 1) {
        $row = mysqli_fetch_array($resultato);
        $nombre = $row['nombre'];
        $mail = $row['mail'];
        $contraseña = $row['contraseña'];
        $role = $row['rol'];
     
    }
}
// ACTUALIZA LA TABLA 


if (isset($_POST['actualizar'])) {
   
    $id = $_REQUEST['id'];
    $Udusuario = $_REQUEST['nombre'];
    $Udmail = $_REQUEST['mail'];
    $udcontraseña = $_REQUEST['contraseña'];
    $udrole = $_REQUEST['rol'];
    $query ="UPDATE usuarios SET nombre='$Udusuario', mail='$Udmail', contraseña='$udcontraseña', rol='$udrole' WHERE ID = $id";
    mysqli_query($connection, $query);

    $_SESSION['mensaje']= 'Registro Actualizado';
    $_SESSION['mensaje_color']='warning';
    $_SESSION['usuarios']=$Udmail;
    $_SESSION['rol']=$udrole;
   header("location:../includes/index.php");
}
?>
<?php include('../includes/header.php'); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <!-- inicio de card -->
            <div class="card card-doby ">
                <form action="edit.usuario.php?id=<?php echo $_REQUEST['id']; ?>" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nombre" maxlength="50" placeholder="Introduce el Nombre" value="<?php echo $nombre; ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="mail" maxlength="50" placeholder="Correo Electronico" value="<?php echo $mail; ?>" required>
                    </div>
                    <div class="form-group">
                        <!-- cambiar por una seleccion con radio button -->
                        <input class="form-control" type="text" name="contraseña" maxlength="11" placeholder="Nivel de Permiso" value="<?php echo $contraseña; ?>" required>
                    </div>
                    <div class="form-group">
                    <select name="rol">
                        <option  value="Elige una Opcion"></option>
                        <option name="rol"<?php if (isset($role) && $role=="cliente") echo "selected";?> value="cliente">Cliente</option>
                        <option name="rol" <?php if (isset($role) && $role=="admin") echo "selected";?> value="admin">Administrador</option>
                        <option name="rol" <?php if (isset($role) && $role=="colaborador") echo "selected";?> value="colaborador">Colaborador</option>
                    </select>

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