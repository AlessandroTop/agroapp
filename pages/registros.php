<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- // Cabesalhor -->
    <header>
        <hgroup>
            <h1>AgrorApp</h1>
        </hgroup>

        <!-- // Menu -->
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="registros.php">Registros</a></li>
                <li><a href="#">Staticas</a></li>
                <li><a  style="color: #111; background-color: #4c2286;" href="#">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <section>
        <button><a href="../pages/registra.php">Registrar</a></button>
    </section>
    <section>
    <?php
        require"../config.php";

        $sql = "SELECT * FROM registrar";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0) {
            foreach($sql->fetchAll() as $registros) {
                echo '<hr>';
                echo '<br>'; 
                echo '<h1>'.$registros['nome'].'</h1>';
                echo '<h1>'.$registros['stado'].'</h1>';
                echo '<h1>'.$registros['dcriar'].'</h1>';
                echo '<h1>'.$registros['litros'].'</h1>';
                echo '<hr>';
            }
        }
    ?>
    </section>
    </main>
    
</body>
</html>