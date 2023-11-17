<?php
$Host = "cadastro.sql"; 
$usuario = "teste_usuario";
$senha = "sua_senha"; 
$banco= "seu_banco"; 

try {
    // Cria uma conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Define o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão com o banco de dados estabelecida com sucesso.";
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}