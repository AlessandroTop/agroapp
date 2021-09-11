<?php
require '../config.php';
    $id = 0;

    if(isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = addslashes($_GET['id']);

        $sql = "DELETE FROM registrar WHERE id = '$id'";
        $pdo->query($sql);

        header("Location: registros.php");
        echo $id;
    } else {
        header("Location: registros.php");
    }
?>