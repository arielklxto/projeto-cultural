<?php

    $host = "localhost";
    $dbname = "projeto_cultural";
    $user = "root";

  try{

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user);

    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  }catch(PDOException $e) {
    // erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
  }