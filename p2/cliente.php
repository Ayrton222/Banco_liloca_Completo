
<?php

if(isset($_POST['submit']))
{

    include_once('config.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];

    //print_r($_POST['nome']);

    $result = mysqli_query($conexao, "INSERT INTO cliente (nome,telefone,endereco,cpf) 
    VALUES ('$nome', '$telefone', '$endereco', '$cpf')");
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
 $sql = "SELECT * FROM cliente";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Nome</td>
         <td>Endereço</td>
         <td>CPF</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idCliente']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['cpf']."</td>";
                        
                    }
                    ?>


    </table>
</body>
</html>
