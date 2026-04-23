<?php
    $host = 'db'; $db = 'app_db'; $user = 'app_user'; $pass = 'app_pass'; //definição do banco de dados
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        } 
    catch (PDOException $e) 
        {
            die("Erro de conexão: " . $e->getMessage());
        }

        //o host é o local onde está instalado o banco de dados
        //a variavel $dsn guarda todas os dados do banco
        //a variável $pdo representa a conexão com o banco de dados
        //o try tenta fazer a conexão com o banco
        //se o try não funciona, vai pro catch e apresenta mensagem de erro