<?php

    if(!empty($_GET['idComida']))
    {
        include_once('config.php');

        $id = $_GET['idComida'];

        $sqlSelect = "SELECT * FROM comida WHERE idComida=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows >0)
        {
            $sqlDelete = "DELETE FROM comida where idComida=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }

    header('Location: comida.php');

?>