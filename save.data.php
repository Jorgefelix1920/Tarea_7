<?php
include('db_connection.php');

if(isset($_POST['save-task'])){

    // es necesario hacer validacion de datos
     $productos =$_REQUEST['producto'];
     $usuarios =$_REQUEST['usuario'];
     $roles =$_REQUEST['roles'];
     $permisos =$_REQUEST['permiso'];
     $descripcion =$_REQUEST['descripcionProducto'];

     $query ="INSERT INTO tarea_7_CRUD(productos,usuarios,roles,permisos,descripcion_Prod)VALUE ('$productos','$usuarios','$roles','$permisos','$descripcion')";
     $resultado =mysqli_query($connection,$query);
     
     if(!$resultado){
         die("Fallo la conexion");
     }
     else{
         $_SESSION['mensaje']= 'Registro Gualdado';
         $_SESSION['mensaje_color']='primary';
        header("Location:includes/index.php");}
    }
