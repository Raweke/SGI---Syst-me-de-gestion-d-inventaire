<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';


    //connexion a la bd
    try{
        $conn = new PDO("mysql:host=$servername;dbname=inventaire", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Exception $e){
        $error_message = $e->getMessage();
    }

?>