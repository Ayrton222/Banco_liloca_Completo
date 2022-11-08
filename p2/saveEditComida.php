<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['idComida'];
        $medicao = $_POST['medicao'];
        $tipo = $_POST['tipo'];

        $sqlInsert = "UPDATE comida
        SET medicao='$medicao',tipo='$tipo'  WHERE idComida=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location:comida.php');

?>