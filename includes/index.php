<?php
include_once('../db_connection.php');
$usuario = $_SESSION['usuarios'];
$rol = $_SESSION['rol'];


include('../includes/header.php'); //header de la paguina

if ($usuario == null && $rol == null) {
    $usuario = $_SESSION['usuarios']= "Usuario No Registrado";
    $_SESSION['mensaje']= "Debes inicial sesión para poder ingresar a esta área";
    header("Location:session.php");
} 
 
 
if ($rol=="cliente"){
    $usuario = $_SESSION['usuarios'];
    $_SESSION['mensaje']= "No tiene persmisos para estar en esta area";
    header("Location:session.php");

}
// evalua que tipo de usuario es
switch ($rol) {
    case "admin":
        $cargo= "Adminstrador";
        break;

    case "colaborador":
        $cargo= " Colaborador";
        break;
    }
?>


<div class=" p-4">

    <div class="row">

        <div class="col-md-4">
            <!-- Inicio de Alerta -->
            <?php if (isset($_SESSION['mensaje'])) { ?>
                <div class="alert alert-<?php echo $_SESSION['mensaje_color']; ?> alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['mensaje']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
            <!-- fin de Alerta -->

            <!-- inicio de card -->
            <!-- hacer validacion de datos del lado del usuario -->

            <div class="card card-doby">
                <form action="../save.data.php " method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="producto" maxlength="50" id="producto" placeholder="Nombre de producto" required autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="usuario" maxlength="50" id="usuario" placeholder="Nombre del usuario" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="roles" maxlength="10" id="roles" placeholder="Cual es su rol" required>
                    </div>
                    <div class="form-group">
                        <!-- cambiar por una seleccion con radio button -->

                        <input class="form-control" type="text" name="permiso" maxlength="10" id="permiso" placeholder="Nivel de permiso" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="descripcionProducto" maxlength="250" id="descripcionProducto" rows="2" placeholder="Introduce la descripcion" required></textarea>
                    </div>
                    <input class="btn btn-success btn-block" name="save-task" type="submit" value="Guardar">
                </form>
            </div>
        </div>
        
        <!-- fin de card -->
        <script>
            function confirmarDelete() {
                var repuesta = confirm("Estas Seguro que desea eliminar el campo");
                if (repuesta == true) {
                    return true;
                }
                if (repuesta == false) {
                    return false;
                }
            }
        </script>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No. Orden</th>
                        <th>Productos</th>
                        <th>Usuarios</th>
                        <th>Roles</th>
                        <th>Permisos</th>
                        <th>Descripción</th>
                        <th>Fecha de Creación</th>
                        <th>Acción</th>
                    </tr>
                <tbody>
                    <?php
                    $query = "SELECT * FROM tarea_7_CRUD";
                    $resultato = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_array($resultato)) { ?>
                        <tr>
                            <td><?php echo $row['orden']; ?></td>
                            <td><?php echo $row['productos']; ?></td>
                            <td><?php echo $row['usuarios']; ?></td>
                            <td><?php echo $row['roles']; ?></td>
                            <td><?php echo $row['permisos']; ?></td>
                            <td><?php echo $row['descripcion_Prod']; ?></td>
                            <td><?php echo $row['fechaCreacion'];  ?></td>
                            <td>
                                <a class="btn btn-primary" href="../funciones/edit.data.php? id=<?php echo $row['orden']; ?>">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <a class="btn btn-danger" onclick="return confirmarDelete()" href="../funciones/delete.producto.php? id=<?php echo $row['orden'] ?>">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                    </svg> </a>
                            </td>


                        </tr>
                    <?php } ?>
                </tbody>
                </thead>
            </table>
        </div>

        <hr><br>
        
       

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="card card-doby">
                <form action="../save.usuario.php" method="POST">
				<h1>Crear Una Cuenta</h1>
				<input type="text" name= "nombre" placeholder="Nombre" />
				<input type="email" name="correo" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <select name="rol" required>
                        <option selected>Elige una Opcion</option>
                        <option name="rol" value="cliente">Cliente</option>
                        <option name="rol" value="admin">Administrador</option>
                        <option name="rol" value="colaborador">Colaborador</option>
                    </select>

				<button type="submit" name ="registrarPanel" value="registrarPanel">Regístrate</button>
			</form>
                </form>
            </div>
        </div>
                    <br><br>
                    <h1>Usuarios Registrados</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Rol</th>
                                <th>Fecha de Creación</th>
                                <th>Acción</th>
                            </tr>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM usuarios";
                            $resultato = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_array($resultato)) { ?>
                                <tr>
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['nombre']; ?></td>
                                    <td><?php echo $row['mail']; ?></td>
                                    <td><?php echo $row['contraseña']; ?></td>
                                    <td><?php echo $row['rol']; ?></td>
                                    <td><?php echo $row['fechacreacion']; ?></td>
                                    <td>
                                        <a class="btn btn-primary" type="submit" name=update-usuario href="../funciones/edit.usuario.php? id=<?php echo $row['ID']; ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                        <a class="btn btn-danger" onclick="return confirmarDelete()" href="../funciones/delete.usuario.php? id=<?php echo $row['ID']; ?>">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                            </svg> </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <a href="salir.php">salir</a>
</div>
<?php

include('../includes/footer.php');
mysqli_close($connection);
?>