<?php
    session_start();
    include_once('config_vagas.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset ($_SESSION["email"]);
        unset ($_SESSION["senha"]);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    $sql = "SELECT * FROM vagas ORDER BY id DESC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="../image/cltec.png">
    <title>CLTEC</title>
    <style>

        body{
            background-color: gray;
        }

        #vagas{
            border-radius: 20px;
            margin: 20px;
            padding: 20px; 
            height: fit-content;
            width: 600px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .pagvagas{
            display: flex;
        }

        input#curriculo{
            margin: 10px;
            padding: 5px;
        }

        .container {
            display: grid;
            grid-template-columns: auto auto;
            padding: 10px;
        }

        .container > div {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }


    </style>
</head>
<body>
<header>
        <img src="../image/cltec.png" alt="Logo" width="150px" height="150px">
        <nav class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                    if($logado == "lucasgsmoretto19@gmail.com"){
                        echo '<li><a href="cadastro_vagas.php" id="cadastro">Cadastrar Vagas</a></li>';
                    }

                ?>
                <li><a href="vagas.php">Vagas</a></li>
                
                <li><a href="usuario.php"><img src="../image/usuario.png" alt="usuário" id="icone">&nbsp;&nbsp;
                <?php
                    echo "$logado";
                ?>
                </a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
    </header>
                <div class="container">
                    <?php  
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<div id='vagas'>".
                            "<img src='exibir_imagem.php?id=".$user_data['id']."' width='150px' height='150px' alt='Foto Empresa' id='icon'><br>".
                            "Descrição: &nbsp".$user_data['descricao']."<br>".
                            "Salário: &nbsp".$user_data['salario']."<br>".
                            "Vagas: &nbsp".$user_data['vagas']."<br>".
                            "<input type='file' id='curriculo' name='curriculo' accept='image/png, image/jpeg, .doc, .docx, .xml, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document' /><br>".
                            "<input type='button' value='Criar CV' id='curriculo'>".
                            "</div>";
                        }
                    ?>
                </div>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>