<?php

   if(isset($_POST['submit']))
   {

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone)
    VALUES ('$nome', '$email', '$senha', '$telefone')");

    echo"<script>
            window.alert('Cadastro Realizado com Sucesso!.');
            window.location=\"index.html\";
        </script>";	
    exit;

    }



?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
      margin: 0;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #1d1d1f;
    }
    h1 {
      font-size: 28px;
      font-weight: bold;
    }
    .container {
      display: flex;
      gap: 60px;
      border-top: 1px solid #ddd;
      padding-top: 40px;
    }
    .box {
      max-width: 320px;
      text-align: center;
    }
    input[type="email"] {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    input[type="password"] {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    input[type="text"] {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .remember {
      margin-top: 10px;
      text-align: left;
      font-size: 14px;
    }
    .button {
      margin-top: 20px;
      padding: 12px 20px;
      background-color: #0071e3;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 200ms;
    }
    .link {
      font-size: 14px;
      color: #0071e3;
      text-decoration: none;
      display: inline-block; 
      margin-top: 10px;
    }

    .voltar{
    width: 20px;
    height: 20px;
    margin-bottom: 10px;
    margin-left: -280px;
    transition: 200ms;
}

.voltar:hover{
  transform: scale(1.1);
}

.button:hover{
  transform: scale(1.1);
}

.label{
   
    text-align: left; 
} 

  </style>
</head>
<body>

  <h1>Bem-vindo a Página de Cadastro!</h1>

<div class="container">
    <div class="box">
        <a href="home.php"><img src="image/voltar.png" alt="" class="voltar"></a>

      <h2>Insira seus dados para cadastro:<br></h2>
        <form action="cadastro.php" method="post">
            <div class="label">
                <label>Nome:</label><br>
                <input type="text"placeholder="Digite seu nome" name="nome" class="input" id="nome" required><br><br>
                <label>Email:</label><br>
                <input type="email" placeholder="exemplo@gmail.com" name="email" class="input" id="email"required><br><br>
                <label>Senha:</label><br>
                <input type="password" placeholder="Digite sua senha com até 16 caracteres" name="senha" class="input" id="senha"required><br><br>
                <label>Confirmar Senha:</label><br>
                <input type="password" placeholder="Digite sua senha com até 16 caracteres" name="senha" class="input" id="senha"required><br><br>
                <label>Telefone:</label><br>
                <input type="text" placeholder="(00)12345-6789" name="telefone" class="input" id="senha"required><br><br>
            
            </div>

            <div class="remember">
                <input type="checkbox" id="lembrar">
                <label for="lembrar">Lembrar</label>
            </div>
       
            <br>

    </div>

    <div class="box">
        <h2>Finalizar login:</h2>
            <p>Após inserir os seus dados<br>clique em enviar.</p>
        <input class="button" type="submit" value='Enviar' name="submit" class="enviar">
        </form>
    </div>
</div>

</body>
</html