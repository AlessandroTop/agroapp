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
        <option value="Parida">Parida</option>
        <option value="Solteira">Solteira</option>
        <option value="Prenha">Prenha</option>
    </select>
    <br/>
    <br/>
    data:<br />
    <select name="dcriar">
        <?php   
            for($mes = 0; $mes <= 12; $mes++) {
        ?>
        <option value="<?php echo $today = date("$mes")?> "> <?php echo $mes;?></option>';
        <?php } ?>
    </select><br><br>
    litros: <br />
    <input type="text" name="litros">
    <br />
    <br />

    <input type="submit" value="Cadastrar" />
</form>