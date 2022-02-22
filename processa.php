<?php

// inicia a sessão da página 

session_start();
include_once("conexao.php");

//filter _input recebe os dados do formulario; limpar os dados que vem do formalario

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";

$result_usuario = mysqli_query($connection,$result_usuario);

if(mysqli_insert_id($connection)){

    //redireciona para o arquivo index 
    
    $_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso </p>";
    header("Location:index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'> Usuário não foi cadastrado com sucesso</p>";
    header("location:index.php");

}



