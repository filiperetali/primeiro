<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>Conteúdo do banco de dados</h1>
    <a href="f_cadastro.php"><h2>Novo Cadastro</h2></a>
    <?php
        include_once "conexao.php";
        $consulta = $conectar->query("Select * from login");
        echo "<table border=1>";
        echo "<tr><td>Usuário</td><td>Nome</td><td>Opções</td></tr>";
        while($linha=$consulta->fetch(PDO::FETCH_ASSOC)){
            echo "<tr><td>$linha[usuario]</td><td>$linha[nome]</td>";
            echo "<td><a href='f_editar.php?id=$linha[id]'>Editar<br></a>";
            echo "<a href='excluir.php?id=$linha[id]'>Excluir</a>";
            echo "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>