<?php
if (isset($_POST['nome']));
isset($_POST['email']) &&
isset($_POST['senha']);

//para ter dados do formulario
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];

// cria um arquivo para armazenar dados
$arquivo = fopen ('cadastro.sql');

fwrite($arquivo, "Nome: $nome, Email: $email, Senha: $senha\n");
 //feche o arquivo
 fclose ($arquivo);

 echo "Cadastro realizado com sucesso";
 else{
    echo "Por favor, preencha todos os campos";
 };
 ?>