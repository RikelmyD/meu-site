<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SISTEMA A</title>
    <link rel = "stylesheet" href = css/style1.css>
</head>
<body>
<form class ="form" action="" method="post">
    <div class="card">
        <div class ="card-top">
        <img class="imgtop" src="img/IMG-20240408-WA0215.jpg" alt="">
        <img class="imglow" src="img/IMG-20240408-WA0213.jpg" alt="">
        <p>Escola Estadual Dr. Pedro Ludovico Teixeira</p>
                <h2>Sistema de Agendamento</h2>
        </div>
        <div class = "card-group">
        <label> Nome Do Solicitante:</label>
        <input type="text" name= "nome"placeholder="Digite o nome do solicitante" required>

        </div>
        <div class ="card-group">
        <label>Componete Curricular:</label>
        <input type="text" name= "componente"placeholder="Digite o Componente Curricular" required>

        </div>
        <div class = "card-group">
        <label>Data:</label>
        <input type="date" name= "data" required>

        </div>
        <div class = "card-group">
        <label>Horário:</label>
        <input type="time" name= "horario"required>

        </div>
        <div class = "card-group">
        <label>Turma:</label>
        <input type="text" name= "turma" placeholder="Digite a Turma" require>

        </div>
        <div class = "card-group">
        <label>Equipamento Solicitado:</label>
        <input type="text" name= "equipamento" placeholder="Digite o Equipamento Solicitado"required>

        </div>
        <div class = "card-group">
        <label>Objetivo:</label>
        <input type="text" name= "objetivo" placeholder="Digite o Objetivo"required>

        </div>
        <div class = "card-group bnt">
        <button type="submit">Enviar Dados</button>
        </div>
        <div class ="card-rodape">
        <img class="rodape" src="img/IMG-20240408-WA0214.jpg" alt="">
        </div>
    </form>
    <?php
    if($_POST){
        $conexao= new PDO('mysql:host=localhost;dbname=controle',"root","vertrigo");
        $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
        $consulta = $conexao->prepare("INSERT INTO professores VALUES(0,:p1,:p2,:p3,:p4,:p5,:p6,:p7)");
        $consulta->bindValue(":p1",$_POST["nome"]);
        $consulta->bindValue(":p2",$_POST["componente"]);
        $consulta->bindValue(":p3",$_POST["data"]);
        $consulta->bindValue(":p4",$_POST["horario"]);
        $consulta->bindValue(":p5",$_POST["turma"]);
        $consulta->bindValue(":p6",$_POST["equipamento"]);
        $consulta->bindValue(":p7",$_POST["objetivo"]);
        $consulta->execute();
        echo "<script>alert ('Dados Enviados Com Sucesso!');</script>";
        echo "<script>location.href='listaa.php';</script>";
    }
    ?>
</body>
</html>    