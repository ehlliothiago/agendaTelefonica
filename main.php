<?php
    include_once('conexao.php');

  $nome =  $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];

  $result_msg_contato = "INSERT INTO agenda(nome, email, telefone) VALUES ('$nome', '$email', '$telefone', 'NOW()')";
  
?>
