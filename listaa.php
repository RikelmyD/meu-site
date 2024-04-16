<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset = "UTF-8">
        <title>RecebimentoDados</title>
        <link rel = "stylesheet" href = css/style3.css>
    </head>
    <body>
        <a href="cadastrar.php"><input type ="button" value= " Voltar para o Sistema"></a>
        <?php
    $conexao= new PDO('mysql:host=localhost;dbname=controle',"root","vertrigo");
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $consulta = $conexao->prepare("SELECT * FROM professores");
    $consulta->execute();
    $resultado = $consulta->fetchAll();
    ?>
    <h1> Lista de Dados Casdastrados </h1>
    <table>
        <tr>
                <th class= "conteudo">ID</th>
                <th class= "conteudo">Nome Do Solicitante</th>
                <th class= "conteudo">Componente Curricular</th>
                <th class= "conteudo">Data</th>
                <th class= "conteudo">Horários</th>
                <th class= "conteudo">Turma</th>
                <th class= "conteudo">Equipamento Solicitado</th>
                <th class= "conteudo">Objetivo</th>
                <th class= "conteudo">Ações</th>
        </tr>
        <?php
        foreach($resultado as $linha){
            echo "<tr>";
            echo"<td>".$linha["id"]."</td>";
            echo"<td>".$linha["nome"]."</td>";
            echo"<td>".$linha["componente"]."</td>";
            echo"<td>".$linha["data"]."</td>";
            echo"<td>".$linha["horario"]."</td>";
            echo"<td>".$linha["turma"]."</td>";
            echo"<td>".$linha["equipamento"]."</td>";
            echo"<td>".$linha["objetivo"]."</td>";
            echo"<td>
            <a href='alterar.php?id=".$linha["id"]."'>Alterar</a>
            <br>
            <a href='excluir.php?id=".$linha["id"]."'>Excluir</a>
            </td>";
     echo "</tr>";
        }
        ?>
    </table>
</body>
</html>