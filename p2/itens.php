<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];

    //print_r($_POST['nome']);

    $result = mysqli_query($conexao, "INSERT INTO itens (valor,quantidade) 
    VALUES ('$valor', '$quantidade')");
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
$sql = "SELECT * FROM itens";
$result = $conexao->query($sql);
   ?>

<table border="1">

    <tr>
        <td>Valor</td>
        <td>Quantidade</td>
    </tr>
     <?php
                   while($user_data = mysqli_fetch_assoc($result)) {
                       echo "<tr>";
                       echo "<td>".$user_data['valor']."</td>";
                       echo "<td>".$user_data['quantidade']."</td>";
                       
                   }
                   ?>


</body>
</html>