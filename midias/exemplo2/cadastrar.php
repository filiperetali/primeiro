<?php
include_once "conexao.php";

try {
    $nome = filter_var($_POST['nome']);
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $insert = $conectar->prepare('insert into login (nome, usuario, senha) values (:nome,:usuario,:senha)');
    $insert->bindParam(':nome',$nome);
    $insert->bindParam(':usuario',$usuario);
    $insert->bindParam(':senha',$senha);
    $insert->execute();
    header('location: index.php');
} catch (PDOException $e) {
    //throw $th;
    echo "Erro ao inserir no banco de dados: ".$e->getMessage();
}

?>