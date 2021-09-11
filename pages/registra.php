<?php
    require "../config.php";
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $stado = addslashes($_POST['stado']);
        $dpariu =addslashes($_POST['dpariu']);
        $dcriar = addslashes($_POST['dcriar']);
        $litros = addslashes($_POST['litros']);

        $sql = "INSERT INTO registrar SET nome = '$nome', stado = '$stado', dpariu = '$dpariu', dcriar = '$dcriar', litros = '$litros'";
        $pdo->query($sql);

        header("Location: registros.php");
    }
    
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <link rel="stylesheet" href="../css/form.css">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>registrar</title>
 </head>
 <body>
    <button><a href="registros.php">Voltar</a></button>
    <div class="area">
        <form method="POST" class="form">
            <fieldset>
                <legend>Registre suas vacas</legend>
                </br>
                </br>
                <label>Nome:</label>
                <input type="text" name="nome" />
                </br>
                </br>
                <label> Stado:</label>
                <select name="stado">
                    <option value="Dando leite">Dando leite</option>
                    <option value="Solteira">Solteira</option>
                    <option value="Prenha">Prenha</option>
                </select>
                <br/>
                <br/>
                <label>Pariu no mês:</label>
                <input type="date" id="dpariu" name="dpariu"><br> <br>
                <label>Pegou cria no mes:</label>
                <input type="date" id="dcriar" name="dcriar"><br><br>
                <label>litros:</label>
                <input type="text" name="litros">
                <br>

                <input type="submit" value="Cadastrar" />
            </fieldset>
            </form>
     </div>
       
 </body>
 </html>