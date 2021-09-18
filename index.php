<?php require "config.php";?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/registros.php">Registros</a></li>
                <li><a href="pages/estatisca.php">Staticas</a></li>
                <li><a  style="color: #111; background-color: #4c2286;" href="#">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="perfil">
            <figure>
                <img src="img/perfil.png">
            </figure>
            <h1>Olá, Alessandro!</h1>
            <p>Adimistre suas vacas, e saiba quando vão parir. 😉</p>
        </section>

        <section class="filtros-principal">
            <button>Todas<a href=""></a></button>
            <button>Parir este mês</button>
            <button>Registradas</button>
            <!--
                // Botões para filtra se e vacas que vao pari etc..
            -->
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

        <!-- // Novidades do mês ou vacas, posts, etc... -->
        <section class="registradas">
            <!-- // para pari no mes -->
            <h2>Vacas para parir este mês</h2>
            <article>
            <?php
                $sql = "SELECT * FROM `registrar`";
                $sql = $pdo->query($sql);
                $data = date("m-Y");

                if($sql->rowCount() > 0){
                    foreach($sql->fetchAll() as $registros){
                        $data_que_vaca_pegou_criar = date('m-Y', strtotime("+9 month", strtotime($registros["dcriar"])));

                        if($data_que_vaca_pegou_criar ==  $data){
                            echo '<span>*'.$registros['nome'].'__'.$data_que_vaca_pegou_criar.'</span>';
                        }
                       
                    }
                }   
                ?>
            </article>
        </section>
    </main>

    <footer>
    <address>
        <p>Desenvolvedor Alessandro</p>
        <a>Meu email: alessandrobravim52@gmail.com </a>
        <p>Todos os direitos reservados.</p>
    </address>
    </footer>


</body>
</html>