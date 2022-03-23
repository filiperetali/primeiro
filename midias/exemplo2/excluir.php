<?php

include_once "conexao.php";
try {
    $id=$_GET['id'];

    $delete=$conectar->prepare('delete from login where id = :id');
    $delete->bindParam(':id',$id);
    $delete->execute();
    header('location:index.php');
} catch (PDOException $e) {
    //throw $th;
    echo "Erro ao excluir: ".$e->getMessage();
}

?>