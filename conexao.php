<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "bancodedados";
$dbname = "cadastro";

// agora ele cria uma conexao

$connection = mysqli_connect($servidor,$usuario, $senha, $dbname);

if($connection->connect_error){
    echo "The connection has failed " .$connection->connect_error; //A conexão falhou 

}
else{
    echo "The connection has succssed"; // A conexão foi concedida com sucesso 

}

?>