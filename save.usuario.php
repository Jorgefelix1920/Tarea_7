<?php 
include('db_connection.php');


if(isset($_POST['registrar'])){
    $nombre =$_REQUEST['nombre'];
    $correo =$_REQUEST['correo'];
    $password =$_REQUEST['password'];
    $rol ="cliente";
    $rol =$_REQUEST['rol'];
    
    $query ="INSERT INTO usuarios(nombre,mail,contraseña,rol)VALUE ('$nombre','$correo','$password','$rol')";
    $resultado =mysqli_query($connection,$query);
    
    if(!$resultado){
        die("Fallo la conexion". mysqli_error($connection));
    }
    else{
        mysqli_close($connection);
        header("Location:index.php");
    }
    }


    if(isset($_POST['registrarPanel'])){
        $nombre =$_REQUEST['nombre'];
        $correo =$_REQUEST['correo'];
        $password =$_REQUEST['password'];
        $rol =$_REQUEST['rol'];
        
        $query ="INSERT INTO usuarios(nombre,mail,contraseña,rol)VALUE ('$nombre','$correo','$password','$rol')";
        $resultado =mysqli_query($connection,$query);
        
        if(!$resultado){
            die("Fallo la conexion". mysqli_error($connection));
        }
        else{
            mysqli_close($connection);
            $_SESSION['mensaje']= 'Registro Creado';
            $_SESSION['mensaje_color']='warning';
            header("Location:includes/index.php");
        }
        }
   ?>
  