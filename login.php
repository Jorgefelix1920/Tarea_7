<?php 
include ('db_connection.php');
$usuario =$_REQUEST['usuario'];
$password = $_REQUEST['password'];

$query = "SELECT COUNT(*) as contar FROM usuarios WHERE mail = '$usuario' AND contraseña ='$password'";
$consulta= mysqli_query($connection,$query);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0){
    $_SESSION['usuarios'] = $usuario;

    //echo $usuario;
    //echo $_SESSION['usuarios'];
    header("location:includes/index.php");
}else{
    header("location:index.php");
}
?>