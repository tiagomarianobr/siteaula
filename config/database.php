<?php

// Informações para conexão com o banco de dados
$database = [
  "host" => "192.168.1.20", // localhost
  "usuario" => "root",
  "senha" => "suporte123", // Deixar vazio ""
  "banco" => "aula_php"
];

try {

    // Realiza a conexão com o banco de dados
    $db = new PDO('mysql:host=' . $database["host"] . ';dbname=' . $database["banco"],
            ''. $database["usuario"] .'',
            ''. $database["senha"] .'',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );

    // Configuracoes de seguranca
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

} catch (PDOException $e) {
    echo "Ocorreu um erro ao conectar com o banco de dados.";
    echo "Mais informações: <br>";
    echo $e->getMessage(); // Informa o erro ocorrido
}


