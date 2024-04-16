<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agendamento</title>
</head>
<body>
    <?php
    $id = $_GET["id"];
    $conexao= new PDO('mysql:host=localhost;dbname=controle',"root","vertrigo");
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
    $consulta = $conexao->prepare("DELETE FROM professores  WHERE id=:p1");
    $consulta->bindValue(":p1",$id);
    $consulta->execute();
    echo "<p>Dados Excluidos com Sucesso!</p>";
    echo "<a href='listaa.php'>Voltar</a>";

    
    ?>
</body>
</html>    