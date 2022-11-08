<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['idProduto'];
        $produto = $_POST['nome'];
        $valor_unit = $_POST['valor_unit'];

        $sqlInsert = "UPDATE produto
        SET nome='$produto',valor_unit='$valor_unit'  WHERE idProduto=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: produto.php');

?>