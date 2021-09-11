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
        $dados = $sql->fetch();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/form.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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
                    <input type="text" name="nome" value="<?php echo $dados['nome'];?>"></br></br>
                    <label>Estado</label>
                    <select name="stado">
                        <option value="Dando leite">Dando leite</option>
                        <option value="Solteira">Solteira</option>
                        <option value="Prenha">Prenha</option>
                    </select></br></br>

                    <label>Pariu no mês:</label>
                    <input type="date" id="dpariu" name="dpariu" value="<?php echo $dados['dpariu'];?>"></br></br>
                    <label>Pegou cria no mes</label>
                    <input type="date" id="dcriar" name="dcriar" value="<?php echo $dados['dcriar'];?>" ></br></br>

                    <label>litros:</label>
                    <input type="text" name="litros" value="<?php echo $dados['litros'];?>"></br></br>

                    <input type="submit" value="Editar" />
                </fieldset>
                </form>
        </div>
</body>
</html>
