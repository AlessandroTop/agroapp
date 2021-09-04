<?php
    require "../config.php";
    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $stado = addslashes($_POST['stado']);
        $dcriar = addslashes($_POST['dcriar']);
        $litros = addslashes($_POST['litros']);

        $sql = "INSERT INTO registrar SET nome = '$nome', stado = '$stado', dcriar = '$dcriar', litros = '$litros'";
        $pdo->query($sql);

        header("Location: registros.php");
    }
    
 ?>

<form method="POST">
    Nome:<br />
    <input type="text" name="nome" /><br/><br/>
    Stado:<br />
    <select name="stado">
        <option value="Dando leite">Dando leite</option>
        <option value="Solteira">Solteira</option>
        <option value="Prenha">Prenha</option>
    </select>
    <br/>
    <br/>
    Pegou cria no mes:<br />
    <input type="date" id="birthday" name="dcriar"><br> <br>
    litros: <br />
    <input type="text" name="litros">
    <br />
    <br />

    <input type="submit" value="Cadastrar" />
</form>