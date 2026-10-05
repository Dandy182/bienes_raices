<?php 

    $singleton = mysqli_connect('localhost', 'Daniel', 'Dandy182', 'BienesRaices');
    
    if(!$singleton){
        echo 'Sin conexion';
    }
?>

