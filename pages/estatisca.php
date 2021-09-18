<?php require "../config.php";?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estatisca</title>
</head>
<body>
     <!-- // Cabesalhor -->
     <header>
        <hgroup>
            <h1>AgroApp</h1>
        </hgroup>

        <!-- // Menu -->
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="registros.php">Registros</a></li>
                <li><a href="estatisca.php">Staticas</a></li>
                <li><a  style="color: #111; background-color: #4c2286;" href="#">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        </section>

         <!-- // quantidade registradas -->
         <section class="registradas">
            <h2>Vacas registradas</h2>
            <article>
                <h3><?php
                $sql = "SELECT * FROM `registrar`";
                $sql = $pdo->query($sql);
                $numeros_de_registros = 0;

                if($sql->rowCount() > 0){
                    foreach($sql->fetchAll() as $vacas){
                        $numeros_de_registros++;
                    }
                    echo "<h3>".$numeros_de_registros."</h3>";

                }

             ?></h3>
            </article>

            
        </section>
    </main>
</body>
</html>