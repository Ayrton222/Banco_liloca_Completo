<?php

    if(!empty($_GET['idProduto']))
    {
        include_once('config.php');

        $id = $_GET['idProduto'];

        $sqlSelect = "SELECT * FROM produto WHERE idProduto=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows >0)
        {
            $sqlDelete = "DELETE FROM produto where idProduto=$id ";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }

    header('Location: produto.php');

?>