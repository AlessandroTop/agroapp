<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/registros.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroApp</title>
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
        <h1 class="titulo">Registros de vacas</h1>
        <section class="add-vacas">
            <button><a href="../pages/registra.php">Adicionar uma nova vaca</a></button>
        </section><!--add-vacas-->

        <section>
            <?php
                require"../config.php";

                $sql = "SELECT * FROM registrar";
                $sql = $pdo->query($sql);
                if($sql->rowCount() > 0) {
                   
                    foreach($sql->fetchAll() as $registros) {
                        $registrosNovo[] = $registros;
                    }
                    $registros_Reversor = array_reverse($registrosNovo);

                    foreach($registros_Reversor as $valor){
                        echo '<article>'; 
            ?>

            <div class="container-registros">
                <?php 
                        echo '<h1>'.$valor['nome'].'</h1>';
                        echo '<p>Estado: '.$valor['stado'].'</p>';
                        echo '<p>Pariu em : '.$valor['dpariu'].'</p>';
                        echo '<p>Pegou criar em: '.$valor['dcriar'].'</p>';
                        echo '<p>Quantos litros: '.$valor['litros'].'</p>';

                        echo '<button><a href="editar.php?id='.$valor['id'].'">Editar</a></button> ';
                        echo '<button style="background-color: #ff3a3a;"> <a href="delete.php?id='.$valor['id'].'">Apagar</a></button>';
                        echo '</article>';
                ?>
            </div><!--container-registros -->
            
            <?php 
                    }
                }
            ?>
            
        </section><!--list-vacas-->
    </main>
    
</body>
</html>