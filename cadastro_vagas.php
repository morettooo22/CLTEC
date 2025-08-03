<?php

   if(isset($_POST['submit']))
   {

    include_once('config_vagas.php');

    $descricao = $_POST['descricao'];
    $salario = $_POST['salario'];
    $vagas = $_POST['vagas'];
    $imagem = null;
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
    }


    $result = mysqli_query($conexao, "INSERT INTO vagas(descricao, salario, vagas, imagem)
    VALUES ('$descricao', '$salario', '$vagas', '$imagem')");


    echo"<script>
            window.alert('Cadastro Realizado com Sucesso!.');
            window.location=\"index.php\";
        </script>";	
    exit;

    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="../image/cltec.png">
</head>
<body>
<section>
        <img class="side" src="../image/cadastrovagas.png" alt="Imagem">
        </section>
        <aside>
    <div class="cadastro">
        <a href="index.php"><img class="voltar" src="../image/voltar.png" alt="voltar"></a>
        <h1>Bem-vindo a Página de Cadastro de Vagas!</h1><br>
        <h2>Preencha os dados abaixo para continuar:</h2>
            <form action="cadastro_vagas.php" method="post" enctype="multipart/form-data">
                <label>Descrição:</label><br>
                <input type="text"placeholder="Informe a Descrição da Vaga" name="descricao" class="input" id="nome"><br><br>
                <label>Salário:</label><br>
                <input type="text" placeholder="Informe o Salário em Reais. Ex: 2000,00" name="salario" class="input" id="email"><br><br>
                <label>Vagas:</label><br>
                <input type="number" placeholder="Informe a Quantidade de Vagas Disponíveis" name="vagas" class="input" id="senha"><br><br>
                <label>Imagem:</label><br>
                <input type="file" name="imagem" class="input"><br><br>
                <input type="submit" value='Enviar' name="submit" class="enviar">&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Cancelar" class="cancelar">
            </form>
    </div>
    </aside>
</body>
</html>
