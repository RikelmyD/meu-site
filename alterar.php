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
    $consulta = $conexao->prepare("SELECT * FROM professores WHERE id=:p1");
    $consulta->bindValue(":p1",$id);
    $consulta->execute();
    $resultado = $consulta-> fetch();
    ?>
    <form action="" method="post">
    <label>
            Nome Do Solicitante:<input type="text" name= "nome"value="<?=$resultado["nome"]?>"required>
            <br><br>
        </label>
        <label>
            Componete Curricular:<input type="text" name= "componente"value="<?=$resultado["componente"]?>"required>
            <br><br>
        </label>
        <label>
            Data:<input type="date" name= "data"value="<?=$resultado["data"]?>"required>
            <br><br>
        </label>
        <label>
            Horario:<input type="time" name= "horario"value="<?=$resultado["horario"]?>"required>
            <br><br>
        </label>
        <label>
            Turma:<input type="text" name= "turma"value="<?=$resultado["turma"]?>"required>
            <br><br>
        </label>
        <label>
            Equipamento Solicitado:<input type="text" name= "equipamento"value="<?=$resultado["equipamento"]?>"required>
            <br><br>
        </label>
        <label>
            Objetivo:<input type="text" name= "objetivo"value="<?=$resultado["objetivo"]?>"required>
            <br><br>
        </label>
        <button type="submit">Alterar Dados</button>
    </form>
    <?php
    if($_POST){
        $conexao= new PDO('mysql:host=localhost;dbname=controle',"root","vertrigo");
        $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        $consulta = $conexao->prepare("UPDATE professores SET nome=:p1, componente=:p2, data=:p3, horario=:p4, turma=:p5, equipamento=:p6, objetivo=:p7 WHERE id=:p8");
        $consulta->bindValue(":p1",$_POST["nome"]);
        $consulta->bindValue(":p2",$_POST["componente"]);
        $consulta->bindValue(":p3",$_POST["data"]);
        $consulta->bindValue(":p4",$_POST["horario"]);
        $consulta->bindValue(":p5",$_POST["turma"]);
        $consulta->bindValue(":p6",$_POST["equipamento"]);
        $consulta->bindValue(":p7",$_POST["objetivo"]);
        $consulta->bindValue(":p8",$id);
        $consulta->execute();
        echo "<p>Dados Alterados com Sucesso!</p>";
        echo "<a href='listaa.php'>Voltar</a>";

    }
    ?>
</body>
</html>    