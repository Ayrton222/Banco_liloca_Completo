<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $medida = $_POST['medida'];
    $marca = $_POST['marca'];
    $sabor = $_POST['sabor'];
    $quantidade = $_POST['quantidade'];

    //print_r($_POST['nome']);

    $result = mysqli_query($conexao, "INSERT INTO bebida (medida,marca,sabor,quantidade) 
    VALUES ('$medida', '$marca','$sabor','$quantidade')");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include_once('config.php');
$sql = "SELECT * FROM bebida";
$result = $conexao->query($sql);
   ?>

<table border="1">

    <tr>
        <td>Codigo</td>
        <td>Medição</td>
        <td>Marca</td>
        <td>Sabor</td>
        <td>Quantidade</td>
    </tr>
     <?php
                   while($user_data = mysqli_fetch_assoc($result)) {
                       echo "<tr>";
                       echo "<td>".$user_data['idBebida']."</td>";
                       echo "<td>".$user_data['medida']."</td>";
                       echo "<td>".$user_data['marca']."</td>";
                       echo "<td>".$user_data['sabor']."</td>";
                       echo "<td>".$user_data['quantidade']."</td>";
                       
                   }
                   ?>


</body>
</html>