<?php
include_once "conexao.php";
$id=$_GET['id'];
$consulta = $conectar->query("Select * from login where id = '$id' ");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<form action="editar.php" method="post">
<fieldset>
        Nome:<br>
        <input type="text" name="nome" id="nome" 
        value="<?php echo $linha['nome'] ?>" ><br>
        Login:<br>
        <input type="text" name="usuario" id="usuario"
        value="<?php echo $linha['usuario'] ?>"><br>
        Senha:<br>
        <input type="password" name="senha" id="senha"
        value="<?php echo $linha['senha'] ?>"><br>

        <input type="hidden" name="id"
        value="<?php echo $linha['id'] ?>">
        
        <input type="submit" value="Enviar" name="btn-enviar">
    </fieldset>

</form>