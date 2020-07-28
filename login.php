<?php 
include ('db_connection.php');
$usuario =$_REQUEST['usuario'];
$password = $_REQUEST['password'];

$query = "SELECT COUNT(*) as contar FROM usuarios WHERE mail = '$usuario' AND contraseña ='$password'";
$consulta= mysqli_query($connection,$query);
$array = mysqli_fetch_array($consulta);


if ($array['contar']>0){

        // busca en la base de datos el rol del usuario
        $sql = "SELECT * FROM usuarios WHERE mail = '$usuario'";
        $resultato = mysqli_query($connection, $sql);
    
        if (mysqli_num_rows($resultato) == 1) {
            $row = mysqli_fetch_array($resultato);
            $role = $row['rol'];

            echo "<br>";
            echo $_SESSION['rol']= $role;
            echo "<br>";
            echo $_SESSION['usuarios'] = $usuario;
             

    header("location:includes/index.php");
    }

    //echo $usuario;
    //echo $_SESSION['usuarios'];
    
}else{
    header("location:index.php");
}

mysqli_close($connection);

?>
