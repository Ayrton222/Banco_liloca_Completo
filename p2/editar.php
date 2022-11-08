<?php
    include_once('config.php');

    if(!empty($_GET['idProduto']))
    {
        $id = $_GET['idProduto'];
        $sqlSelect = "SELECT * FROM produto WHERE idProduto=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $produto = $user_data['nome'];
                $valor_unit = $user_data['valor_unit'];

            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/produto.css">
</head>
<body>
    <div class="titulo">
        Cadastro de Produto
    </div>

    <div class="conteudo">
        <form action="saveEditProduto.php" method="post">
            
            <input type="text" name="produto" id="produto" value= <?php echo $produto;?> required>
            <label class="produto">Nome do produto:</label>
            

        
            <label class="valor_unit">Valor unitario:</label>
            <input type="text" name="valor_unit" id="val_unit" value=<?php echo $valor_unit;?>>    

            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input type="submit" name="update" id="submit" class="button"></input>

        </form>
    </div>
</body>
</html>