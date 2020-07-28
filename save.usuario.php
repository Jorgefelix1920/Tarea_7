<?php 
include('db_connection.php');
session_destroy();
session_start();

if(isset($_POST['registrar'])){
    $nombre =$_REQUEST['nombre'];
    $correo =$_REQUEST['correo'];
    $password =$_REQUEST['password'];
    
    $query ="INSERT INTO usuarios(nombre,mail,contraseña)VALUE ('$nombre','$correo','$password')";
    $resultado =mysqli_query($connection,$query);
    
    if(!$resultado){
        die("Fallo la conexion". mysqli_error($connection));
    }
    else{
        header("Location:index.php");
    }
    }
   ?>
  