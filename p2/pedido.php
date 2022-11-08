
<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $data_pedido = $_POST['data_pedido'];
    $data_festa = $_POST['data_festa'];
    $prazo = $_POST['prazo'];
    $data_entrega = $_POST['data_entrega'];
    $tipo_entrega = $_POST['tipo_entrega'];
    $festa = $_POST['frete'];
    $sinal = $_POST['sinal'];
    $restante = $_POST['restante'];

    //print_r($_POST['nome']);

    $result = mysqli_query($conexao, "INSERT INTO pedido (data_pedido,data_festa,prazo,data_entrega,tipo_entrega,frete,sinal,restante) 
    VALUES ('$data_pedido', '$data_festa', '$prazo', '$data_entrega', '$tipo_entrega', '$festa', '$sinal','$restante')");
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
 $sql = "SELECT * FROM pedido";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Data do Pedido</td>
         <td>Data da Festa</td>
         <td>Prazo</td>
         <td>Data da Entrega</td>
         <td>Tipo de Entrega</td>
         <td>Frete</td>
         <td>Sinal</td>
         <td>Restante</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idPedido']."</td>";
                        echo "<td>".$user_data['data_pedido']."</td>";
                        echo "<td>".$user_data['data_festa']."</td>";
                        echo "<td>".$user_data['prazo']."</td>";
                        echo "<td>".$user_data['data_entrega']."</td>";
                        echo "<td>".$user_data['tipo_entrega']."</td>";
                        echo "<td>".$user_data['frete']."</td>";
                        echo "<td>".$user_data['sinal']."</td>";
                        echo "<td>".$user_data['restante']."</td>";
                        
                    }
                    ?>


    </table>
</body>
</html>
