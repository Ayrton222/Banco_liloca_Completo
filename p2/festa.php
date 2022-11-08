
<?php
if(isset($_POST['submit']))
{
    include_once('config.php');
    $aniversariante = $_POST['aniversariante'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $tema = $_POST['endereco'];
    $cor = $_POST['cores'];
    //print_r($_POST['nome']);
    $result = mysqli_query($conexao, "INSERT INTO festa (nome,idade,endereco,tema,cores) 
    VALUES ('$aniversariante', '$idade', '$endereco', '$tema','$cor')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Festa</title>
</head>
<body>
<?php
    include_once('config.php');
 $sql = "SELECT * FROM festa";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Nome do aniversariante</td>
         <td>Idade</td>
         <td>Endereço</td>
         <td>Tema</td>
         <td>Cores</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idFesta']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['idade']."</td>";
                        echo "<td>".$user_data['endereco']."</td>";
                        echo "<td>".$user_data['tema']."</td>";
                        echo "<td>".$user_data['cores']."</td>";
                        
                    }
                    ?>


    </table>

</body>
</html>