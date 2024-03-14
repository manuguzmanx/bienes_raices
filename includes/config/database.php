<?php 

function conectarDB():mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud', 3310);

    if(!$db) {
        echo "No se pudo conectar";
        exit;
    }

    return $db;
}