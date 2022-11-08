
<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $produto = $_POST['produto'];
    $valor_unit = $_POST['valor_unit'];
   
    //print_r($_POST['nome']);

    $result = mysqli_query($conexao, "INSERT INTO produto (nome,valor_unit) 
    VALUES ('$produto', '$valor_unit')");
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
 $sql = "SELECT * FROM produto";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Produto</td>
         <td>Valor Unitario</td>
         <td>Altera</td>

     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idProduto']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['valor_unit']."</td>";
                        echo "<td>
                        <a href='editar.php?id=$user_data[idProduto]' title='Editar'>Editar</a> |
                        <a href='delete.php?id=$user_data[idProduto]' title='Deletar'>Deletar </a>
                        </td>";
                    echo "</tr>";
                        
                    }
                    ?>


    </table>
</body>
</html>
