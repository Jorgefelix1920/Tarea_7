<?php
include('db_connection.php');

if(isset($_REQUEST['id'])){
    $id =$_REQUEST['id'];
    $query = "DELETE FROM tarea_7_CRUD WHERE orden = $id";
    $resultato = mysqli_query($connection, $query);
       
    if (!$resultato) {
        die("No se encontro el Archivo");
        }
        
        header("Location:includes/index.php");  // regresa al index
        $_SESSION['mensaje']="Dato Borrado";
        $_SESSION['mensaje_color']="danger";
        
        // elimina demaciado facil, necesita que se coloque una confirmacion de eliminacion
}
