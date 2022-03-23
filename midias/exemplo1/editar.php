<?php

include_once "conexao.php";
try {
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];

    $update=$conectar->prepare("UPDATE login SET nome=:nome,usuario = :usuario,senha = :senha where id = :id" );
    $update->bindParam(':id',$id);
    $update->bindParam(':nome',$nome);
    $update->bindParam(':usuario',$usuario);
    $update->bindParam(':senha',$senha);
    $update->execute();
    header('location:index.php');
} catch (PDOException $e) {
    //throw $th;
    echo "Erro ao excluir: ".$e->getMessage();
}

?>