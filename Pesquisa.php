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
    <script src="js.js"></script>
    <title>Resultados da Pesquisa</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="Início.php">Início</a><!--Arranjar logo para o site-->
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
                        <a class="nav-link" href="Iniciar_sessão.html">Iniciar sessão</a>
                    </li>
                </ul>
                <form class="d-flex" method="post" action="Pesquisa.php">
                    <input class="form-control me-2" name="texto" type="text" placeholder="Procurar">
                    <button class="btn btn-primary" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "utilizadores";
    // Conexão com a base de dados
    $conn = new mysqli($servername, $username, $password, $dbname);
    $text = $_POST["texto"];

    $sql = "SELECT * FROM produtos WHERE Nome_Produto like '%$text%'";
    $resultado = mysqli_query($conn, $sql);
    if (1 > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            $nomeProduto = $row["Nome_Produto"];
            $precoProduto = $row["Preço_Produto"];
            $genero = $row["género"];
            $link = $row["link_Imagem"];
            echo 
            '<div class="mt-3 text-center">
                <div class="d-flex mb-3">
                    <div class="p-2 flex-fill">
                        <a href="Click_Produto.php?produto='.$nomeProduto.'">
                            <img src="' . $link .'" onclick="openModal();
                        currentSlide(5)" class="hover-shadow cursor">
                            <h4 class="Secundário">' . $nomeProduto .'</h4>
                            <span class="Secundário">' . $precoProduto . "€".'</span>
                        </a>
                    </div>
                </div>
            </div>';
            
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
    mysqli_close($conn);
    echo '<footer class="fim bg-dark">
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
</footer>'
    ?>
    <!--SELECT * FROM `produtos` WHERE Nome_Produto = "Nike Air Force 1'07"-->
</body>

</html>