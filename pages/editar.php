<?php
    require "../config.php";
    $id = 0;

    if(isset($_GET['id']) && !empty(['id'])) {
        $id = addslashes($_GET['id']);
    }

    if(isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $stado = addslashes($_POST['stado']);
        $dcriar = addslashes($_POST['dcriar']);
        $litros = addslashes($_POST['litros']);

        $sql = "UPDATE registrar SET nome = '$nome', stado = '$stado', dcriar = '$dcriar', litros = '$litros' WHERE id = '$id'";
        $pdo->query($sql);

        header("Location: registros.php");
    }
    /**
     * Vamos listalo para poemos em value no formulario
     * */
    $sql = "SELECT * FROM registrar WHERE id = '$id'";
    $sql = $pdo->query($sql);
    if($sql->rowCount() > 0) {
        $dado = $sql->fetch();
    }
?>

<form method="POST">
    Nome:<br />
    <input type="text" name="nome" value="<?php echo $dado['nome'];?>"/><br/><br/>
    Stado:<br />
    <select name="stado">
        <option value="Dando leite">Dando leite</option>
        <option value="Solteira">Solteira</option>
        <option value="Prenha">Prenha</option>
    </select>
    <br/>
    <br/>
    Pegou cria no mes:<br />
    <input type="date" id="dcriar" name="dcriar" value="<?php echo $dado['dcriar'];?>"><br><br>
    litros: <br />
    <input type="text" name="litros" value="<?php echo $dado['litros'];?>">
    <br />
    <br />

    <input type="submit" value="Editar" />
</form>