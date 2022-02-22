<?php 

// inicia a sessão 

session_start();

?> 

<!DOCTYPE html>
 <html lang="pt-bt">
  <head>
   <meta charset="utf-8">
   
   <title> Cadastrar: </title>

</head>
<body> 

  <h1> Cadastrar Usuário</h1>

   <?php 

    // se existir a variavel imprime a varievel global 

    if(isset($_SESSION['msg'])){

    echo $_SESSION['msg'];

    // destroi a variavel global 

    unset($_SESSION['msg']);

  }
  ?> 
    <form method="POST" action="processa.php">
     <label> Nome: </label>
      <input type="text" name="nome" placeholder="Digite o nome completo">
       <br><br>

      <label> Email: </label>
      <input type="email" name="email" placeholder="Digite o seu melhor e-mail">
       
      <br><br>
     
   <input type="submit" value="Cadastrar">
  </form>
 </body>
</html>