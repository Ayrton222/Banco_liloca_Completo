
<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $medicao = $_POST['medida'];
    $tipo = $_POST['tipo'];

    //print_r($_POST['nome']);

    $result = mysqli_query($conexao, "INSERT INTO comida (tipo,medicao) 
    VALUES ('$tipo', '$medicao')");
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
 $sql = "SELECT * FROM comida";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Medição</td>
         <td>Tipo da comida</td>

     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idComida']."</td>";
                        echo "<td>".$user_data['medicao']."</td>";
                        echo "<td>".$user_data['tipo']."</td>";
                        echo "<td>
                        <a href='editarComida.php?id=$user_data[idComida]' title='Editar'>Editar</a> |
                        <a href='deleteComida.php?id=$user_data[idComida]' title='Deletar'>Deletar </a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>


    </table>
</body>
</html>
