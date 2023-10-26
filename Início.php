<?php 
include 'login.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="CSS/estilo.css">
  <title>Loja</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-secondary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../Início.php">Início</a><!--Arranjar logo para o site-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="Páginas_Principais/Homem.html">Homem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Páginas_Principais/Mulher.html">Mulher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Páginas_Principais/Criança.html">Criança</a>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown" href="Iniciar_sessão.html">
              <?php 
              if (!isset($_SESSION["login_user"]))
              {
                echo "Iniciar sessão";
              }
              else
              {    
                echo $_SESSION["login_user"];  
              }
              ?>
            </a>
          </li>       
            <?php 
            if (isset($_SESSION["login_user"]))
              echo '
               <li class="nav-item">
                <a class="nav-link" href="sessão_destroy.php">Terminar sessão
                </a>
                </li>'
            ?>
        </ul>
        <form method="post" class="d-flex" action="Pesquisa.php">
          <input class="form-control me-2" name="texto" type="text" placeholder="Procurar">
          <button class="btn btn-primary" type="submit">Pesquisar</button>
          <button class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i></button>
        </form>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <p class="Titulo">Mais para explorar</p>
  <div align="center" class="Principal">
    <div class="coluna">
      <a href="Páginas_Principais/Homem.html">
        <img src="Imagens_Escolher_Género/Escolher_Homem.webp" width="390px" height="566px">
        <br>
        <br>
        <h4 align="center" class="Secundário">Homem</h4>
      </a>
    </div>
    <div class="coluna">
      <a href="Páginas_Principais/Mulher.html">
        <img src="Imagens_Escolher_Género/Escolher_Mulher.webp" width="390px" height="566px">
        <br>
        <br>
        <h4 align="center" class="Secundário">Mulher</h4>
      </a>
    </div>
    <div class="coluna">
      <a href="Páginas_Principais/Criança.html">
        <img src="Imagens_Escolher_Género/Escolher_Criança.webp" width="390px" height="566px">
        <br>
        <br>
        <h4 align="center" class="Secundário">Criança</h4>
      </a>
    </div>
  </div>
  <br>
  <p class="Titulo">Escolher por desporto</p>
  <div class="scrollmenu">
    <a href="Páginas_Desporto/Futebol.html">
      <img src="Imagens_Desporto/Futebol.webp" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
      <br>
      <br>
      <h4 class="Secundário">Futebol</h4>
    </a>
    <!--Separar-->
    <a href="Páginas_Desporto/Basketebol.html">
      <img src="Imagens_Desporto/Basquetebol.webp" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
      <br>
      <br>
      <h4 class="Secundário">Basquetebol</h4>
    </a>
    <!--Separar-->
    <a href="Páginas_Desporto/Running.html">
      <img src="Imagens_Desporto/Running.webp" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
      <br>
      <br>
      <h4 class="Secundário">Corrida</h4>
    </a>
    <!--Separar-->
    <a href="Páginas_Desporto/Treino.html">
      <img src="Imagens_Desporto/Treino.webp" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
      <br>
      <br>
      <h4 class="Secundário">Treino</h4>
    </a>
    <!--Separar-->
    <a href="Páginas_Desporto/Dança.html">
      <img src="Imagens_Desporto/Dança.webp" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
      <br>
      <br>
      <h4 class="Secundário">Dança</h4>
    </a>
    <!--Separar-->
    <a href="Páginas_Desporto/Ténis.html">
      <img src="Imagens_Desporto/Ténis.webp" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
      <br>
      <br>
      <h4 class="Secundário">Ténis</h4>
    </a>
  </div>

  <br>
  <br>
  <p class="Titulo">Tendências</p>

  <div class="scrollmenu">
    <a href="Click_Produto.php?produto=Nike Air Force 107">
      <img src="Imagens_Produtos/Nike air force 1 07.png"
        class="hover-shadow cursor">
      <h4 class="Secundário">Nike Air Force 1'07</h4>
      <span class="Secundário">Sapatos para Homem</span>
      <br>
      <span class="Secundário">119,99€</span>
    </a>
    <!--Separar-->
    <a href="Click_Produto.php?produto=Nike Air Jordan 1 Mid">
      <img src="Imagens_Produtos/Nike jordan.png" class="hover-shadow cursor">
      <h4 class="Secundário">Nike Air Jordan 1 Mid</h4>
      <span class="Secundário">Sapatos para Homem</span>
      <br>
      <span class="Secundário">119,99€</span>
    </a>
    <!--Separar-->
    <a href="Click_Produto.php?produto=Nike air force LE">
      <img src="Imagens_Produtos\Nike air force LE.jpg" onclick="openModal();currentSlide(3)"
        class="hover-shadow cursor">
      <h4 class="Secundário">Nike Air Force 1 LE</h4>
      <span class="Secundário">Sapatos Júnior</span>
      <br>
      <span class="Secundário">94,99€</span>
    </a>
    <!--Separar-->
    <a href="Click_Produto.php?produto=Adidas Superstar">
      <img src="Imagens_Produtos/Adidas_Superstar.jpg" onclick="openModal();currentSlide(4)"
        class="hover-shadow cursor">
      <h4 class="Secundário">Adidas Superstar</h4>
      <span class="Secundário">Sapatos Unisexo</span>
      <br>
      <span class="Secundário">119,99€</span>
      <!--Meter esta imagem dos tamanho das outras-->
    </a>
    <!--Separar-->
    <a href="Click_Produto.php?produto=Chuteiras Adidas Predator" style="height: 411px;">
      <img src="Imagens_Produtos/Futebol/Chuteira Adidas Copa Sense.3 MG.jpg" onclick="openModal();currentSlide(5)"
        class="hover-shadow cursor">
      <h4 class="Secundário">Chuteira Adidas Predator</h4>
      <span class="Secundário">Chuteiras</span>
      <br>
      <span class="Secundário">290,99€</span>
    </a>
    <!--Separar-->
    <a href="Click_Produto.php?produto=Nike Jordan Dunk Retro">
      <img src="Imagens_Produtos/Nike dunk low.png" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
      <h4 class="Secundário">Nike Jordan Dunk Retro</h4>
      <span class="Secundário">Sapatos para Homem</spa>
        <br>
        <span class="Secundário">110€</span>
    </a>
  </div>
  <footer class="fim bg-dark">
    <div class="container">
        <div class="col bg-dark text-center">
            <p class="Redes">Redes Sociais</p>
            <i class="fa-brands fa-instagram icones"></i>
            <i class="fa-brands fa-facebook icones"></i>
            <i class="fa-brands fa-youtube icones"></i>
            <i class="fa-brands fa-tiktok icones"></i>
        </div>
        <div class="col bg-dark text-center">
            <p class="Redes">Métodos de Pagamento</p>
            <img src="Imagens_Produtos/mb_way.png" class ="pagamento"></img>
            <img src="Imagens_Produtos/visa.png" class ="pagamento"></img>
            <img src="Imagens_Produtos/pay_pal.png" class ="pagamento"></img>
            <img src="Imagens_Produtos/mastercard.png" class ="pagamento"></img>
        </div>
    <div>
</footer>
  
</body>

</html>