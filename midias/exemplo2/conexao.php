<?php

    try {
        //conexão com o banco de dados
        $conectar = new PDO("mysql:host=localhost;port=3306;dbname=testes","root","");
        echo "Sucesso";
    } catch (PDOException $e) {
        //caso ocorra falha
        echo "Erro ao conectar com banco de dados: ".$e->getMessage();
    }

?>