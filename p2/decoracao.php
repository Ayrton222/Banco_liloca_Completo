
<?php
if(isset($_POST['submit']))
{
    include_once('config.php');
    $tamanho = $_POST['medida'];
    $modelo = $_POST['modelo'];

    //print_r($_POST['nome']);
    $result = mysqli_query($conexao, "INSERT INTO decoracao (tamanho,modelo) 
    VALUES ('$tamanho', '$modelo')");
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
 $sql = "SELECT * FROM decoracao";
 $result = $conexao->query($sql);
    ?>

<table border="1">

     <tr>
         <td>Código</td>
         <td>Tamanho</td>
         <td>Modelo</td>
     </tr>
      <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['idDecoracao']."</td>";
                        echo "<td>".$user_data['tamanho']."</td>";
                        echo "<td>".$user_data['modelo']."</td>";
                        
                    }
                    ?>


    </table>

</body>
</html>