<?php 
    //importar la conexión
    require 'includes/config/database.php';
    $bd = conectarDB();

    //Crear email y pwd
    $email = "correo@correo.com";
    $password = "123456";

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    //Query crear user
    $query = "INSERT INTO usuarios (email, password) VALUES ('{$email}', '{$passwordHash}')";

    //Agregarlo a BD
    mysqli_query($bd, $query);