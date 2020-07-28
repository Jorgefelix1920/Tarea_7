<?php
require_once('../db_connection.php');

// elimina Un Usuario 
    if(isset($_REQUEST['id'])){
        $id =$_REQUEST['id'];
        $query = "DELETE FROM usuarios WHERE ID = $id";
        $resultato = mysqli_query($connection, $query);
           
        if (!$resultato) {
            die("No se encontro el Usuario");
            }
            
            header("Location:../includes/index.php");  // regresa al index
            $_SESSION['mensaje']="Dato Borrado";
            $_SESSION['mensaje_color']="danger";
            
            // elimina demaciado facil, necesita que se coloque una confirmacion de eliminacion
    }
    
?>