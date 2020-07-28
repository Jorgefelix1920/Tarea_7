<?php
// es mejor usar variables
session_start();
$connection = mysqli_connect(
    'localhost', 
    'root',
    '',
    'crud_php_actividad_7'
) or die ("Error en la Conexión.".mysqli_error($connection));

?>