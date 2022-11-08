<?php
    include_once('config.php');

    if(!empty($_GET['idComida']))
    {
        $id = $_GET['idComida'];
        $sqlSelect = "SELECT * FROM comida WHERE idComida=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $medicao = $user_data['medicao'];
                $tipo = $user_data['tipo'];
            }
        }
        else
        {
            header('Location: comida.php');
        }

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comida</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/comida.css">

</head>
<body>
    <div class="titulo">
        Cadastro de Comida
    </div>

    <div class="conteudo">
        <form action="saveEditComida.php" method="post">
            
            <label class="medida">Medição:</label>
            <input type="text" name="medida" id="medida" value=<?php echo $medicao;?> required>

            <label class="tipo">Tipo:</label>
            <input type="text" name="tipo" id="tipo" value=<?php echo $tipo;?> required>
            
            
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit" name="update" id="submit" class="button"></input>
 
        </form>
    </div>
</body>
</html>
