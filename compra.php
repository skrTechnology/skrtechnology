<?php
include ("conexao.php");

if (isset ($_POST['data_compra']) &&
isset ($_POST['produto']) &&
isset ($_POST['quantidade']) &&
isset ($_POST['preco_unitario']) 
);

{
    $data_compra= 
    $_POST['data_compra'];
    $produto= 
    $_POST['produto'];
    $quantidade= 
    $_POST['quantidade'];
    $preco_unitario= 
    $_POST['preco_unitario'];

    //mysql

   $sql= 
   " INSERT INTO compras (data_compra, produto, quantidade ,preco_unitario, total)
VALUES ('2023-09-22', 'kit tc', 1, 300)";
   ($conexao->query ($sql)=== TRUE);
  
   { echo "Compra realizada com sucesso!" };
    else {  
        echo "ERRO ao registrar a compra:". $conexao->error;
    };
else {
    echo "Por favor , preencha todos os campos." 
};
  
  };  
    $conexao->close()
    ?>

    






