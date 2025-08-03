
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>ETEC Vagas</title>
  <link rel="stylesheet" href="style-home.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Rubik&family=Space+Grotesk:wght@700&display=swap" rel="stylesheet">
  <style>
    nav ul {
  list-style: none;
  display: flex;
  gap: 20px;
  margin: 0;
  padding: 0;
}

nav a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
}

.botao-cadastro {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  background-color: #d32f2f;
  color: white;
  padding: 8px 25px;
  border-radius: 5px;
  font-size: 13px;
}

.botao-login {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  background-color: #1f1f1f;
  color: white;
  padding: 8px 25px;
  border-radius: 5px;
  font-size: 13px;
}

.botao-cadastro, .botao-login {
  transition: 0.3s ease-in-out;
}

.botao-cadastro:hover {
  background-color: #b71c1c;
}

.botao-login:hover {
  background-color: #000;
}

        #vagas{
            border-radius: 20px;
            margin: 20px;
            padding: 20px; 
            height: fit-content;
            width: 300px;
            background-color: #b71c1c;
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
            grid-template-columns: auto auto auto;
            padding: 10px;
            text-shadow: 1px 1px 5px black;
            color: white;
            justify-content: center;
}


        .container > div {
            padding: 10px;
            text-align: center;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.6)
        }

        #icon{
            border-radius: 20px;
            margin: 30px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.6);
        }


  </style>
</head>
<body>

  <header class="topo">
  <img src="image/Logo.png" class="logo" alt="Logo" width="120px" height="120px">

  <nav>
    <ul>
      <li class="menu-container">
        <button class="hamburguer-icon" onclick="toggleMenu()">
          <i class="fas fa-bars"></i>
          <span class="menu-text">Menu</span>
        </button>
        <div class="dropdown-menu" id="dropdownMenu">
          <a href="vagas.php">Vagas de emprego</a>
          <a href="curriculo/index.html">Criar curriculo</a>
          <a href="contato.html">sobre</a>
        </div>
      </li>
      <li><a href="sair.php" class="botao-cadastro">Sair</a></li>
    </ul>
  </nav>
</header>

                <div class="container">
                </div>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
  function toggleMenu() {
    const menu = document.getElementById("dropdownMenu");
    menu.classList.toggle("show");
  }

  // Fecha o menu se clicar fora
  window.onclick = function(event) {
    if (!event.target.closest('.menu-container')) {
      document.getElementById("dropdownMenu").classList.remove("show");
    }
  }
</script>
</body>
</html>
