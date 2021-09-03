<?php
    $dsn = "mysql:dbname=agroapp;host=localhost";
    $dbuser = "root";
    $dbpass = "";

    try{
        $pdo = new PDO($dsn, $dbuser, $dbpass);
    }catch (PDOException $e) {
        echo "Falhou a conex    ão: ".$e->getMessage();
    }
?>