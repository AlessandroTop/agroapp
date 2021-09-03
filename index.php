<?php require "config.php";?>

<!DOCTYPE html>
<html>
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
            <h1>AgrorApp</h1>
        </hgroup>

        <!-- // Menu -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="pages/registros.php">Registros</a></li>
                <li><a href="#">Staticas</a></li>
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
            <button><a href="pages/registra.php">Adicionar vacas </a></button>

            <!--
                // Botões para filtra se e vacas que vao pari etc..
            -->
        </section>

         <!-- // quantidade registradas -->
         <section class="registradas">
            <h2>Vacas registradas</h2>
            <article>
                <h3>30</h3>
            </article>

            
        </section>

        <!-- // Novidades do mês ou vacas, posts, etc... -->
        <section class="registradas">
            <!-- // para pari no mes -->
            <h2>Vacas para parir este mês</h2>
            <article>
                    <h4>Meu artigo1</h4>
                    <p>Mes 10/09/21</p>
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