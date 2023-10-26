<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/estilo.css">
    <title></title>
</head>

<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "utilizadores";
        // Conexão com a base de dados
        $conn = new mysqli($servername, $username, $password, $dbname);
        if (isset($_GET['produto'])) {
            $nome_produto = $_GET['produto'];
            $sql = "SELECT * FROM produtos WHERE Nome_Produto like '%$nome_produto%'";
            $resultado = mysqli_query($conn, $sql);
            if (1 > 0) {
                while ($row = mysqli_fetch_assoc($resultado)) {
                    $nomeProduto = $row["Nome_Produto"];
                    $precoProduto = $row["Preço_Produto"];
                    $descricao = $row["Descricao"];
                    $genero = $row["género"];
                    $desporto = $row["desporto"];
                    $link = $row["link_Imagem"];
                    $tipo = $row["Tipo"];
                    $marca = $row["Marca"];
                    $link_produto = "";
                    if($marca == "Nike")
                    {
                        $link_produto = "https://www.nike.com/pt/?cp=40087677112_search_%7cnike%7c10574809364%7c107366203591%7ce%7cc%7cPT%7cpure%7c452338418809&ds_rl=1252249&gclid=Cj0KCQjw1rqkBhCTARIsAAHz7K1sn2RUgz0E7kYIwZDfrBtWOZnoqZuTjk0S4WvVDfVwtHvWj0ItXBQaAqXmEALw_wcB&gclsrc=aw.ds";
                    }
                    if ($marca == "Adidas")
                    {
                        $link_produto = "https://www.adidas.pt/?af_channel=Search&af_reengagement_window=30d&c=adidas-Brand-B-Exact-ROI&cm_mmc=AdieSEM_Google-_-adidas-Brand-B-Exact-ROI-_-Brand-adidas-X-General%232-_-adidas&cm_mmca1=PT&cm_mmca2=e&gclid=EAIaIQobChMI5sbOnsbW_wIV0ZrVCh1W6AWOEAAYASAAEgJmfvD_BwE&gclsrc=aw.ds&is_retargeting=true&pid=googleadwords_temp";
                    }
                    if ($marca == "Puma")
                    {
                        $link_produto = "https://eu.puma.com/pt/en/home?gclid=EAIaIQobChMI65bejsfW_wIV6_93Ch1nmws6EAAYAiAAEgLe-fD_BwE";
                    }
                    if ($marca == "New York")
                    {
                        $link_produto = "New York";
                    }
                    echo '<nav class="navbar navbar-expand-sm navbar-dark bg-secondary fixed-top">
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
                                    <form method="post" class="d-flex" action="Pesquisa.php">
                                    <input class="form-control me-2" name="texto" type="text" placeholder="Procurar">
                                    <button class="btn btn-primary" type="submit">Pesquisar</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                        <br>
                        <br>
                        <div class="mt-3">
                            <div class="d-flex mb-3">
                                <div class="p-2 flex-fill text-center">
                                    <img src =" ' . $link . '" width="450px" class= "click_imagem">
                                </div>
                                <div class="p-2 flex-fill">
                                    <p class="Titulo">' . $nome_produto . '</p>
                                    <p class="texto" style="text-align: left;">' . $tipo . '
                                        <a href="'.$link_produto.'">
                                            <span class="alinha">Visitar site da marca</span>
                                        </a>
                                    </p>
                                    <p class = "texto">' . $descricao . '</p>
                                    <p class = "preco">' . $precoProduto ."€".'</p>
                                    <p class = "Subtitulo">Escolher Tamanho</p>
                                    <div class="text-center">
                                        <button class="butao" id="butao1" onclick="changeColor(event)">39</button>  
                                        <button class="butao" id="butao2" onclick="changeColor(event)">40</button>
                                        <button class="butao" id="butao3" onclick="changeColor(event)">41</button>
                                        <button class="butao" id="butao4" onclick="changeColor(event)">41,5</button>
                                        <button class="butao" id="butao5" onclick="changeColor(event)">42</button>
                                        <button class="butao" id="butao6" onclick="changeColor(event)">43,5</button>
                                        <button class="butao" id="butao7" onclick="changeColor(event)">44</button>    
                                    </div>    
                                    <div class="container-fluid text-center">
                                        <button class="button">Adicionar ao carrinho</button>
                                    </div>                
                                </div>
                            </div>
                        </div>
                        ';
                        echo '<p class = "Titulo">Também podes gostar</p>';
                        
                        $query = " SELECT * FROM produtos ORDER BY RAND() LIMIT 6
                        ";

                        // Executar a consulta
                        $result = mysqli_query($conn, $query);
                        for($i = 0; $i < 6; $i++)
                        {
                            // Obter os registros da linha selecionada
                            $row = mysqli_fetch_array($result);
                            $nome_ = $row['Nome_Produto'];
                            $preco = $row['Preço_Produto'];
                            $des = $row['Descricao'];
                            $sexo = $row['género'];
                            $des = $row['desporto'];
                            $link_imagem = $row['link_Imagem']; 
                            if ($i==0)  
                            {                                  
                                echo 
                                '<div class="scrollmenu">
                                    <a href="Click_Produto.php?produto='.$nome_.'">
                                        <img src="'.$link_imagem.'"
                                            class="hover-shadow cursor">
                                        <h4 class="Secundário">'.$nome_.'</h4>
                                        <span class="Secundário">'.$sexo.'</span>
                                        <br>
                                        <span class="Secundário">'.$preco."€".'</span>
                                    </a>'
                                ;
                            }
                            else
                            {
                                if ($i==6)
                                {
                                    echo 
                                    '<div class="scrollmenu">
                                        <a href="Click_Produto.php?produto='.$nome_.'">
                                            <img src="'.$link_imagem.'"
                                                class="hover-shadow cursor">
                                            <h4 class="Secundário">'.$nome_.'</h4>
                                            <span class="Secundário">'.$sexo.'</span>
                                            <br>
                                            <span class="Secundário">'.$preco."€".'</span>
                                        </a>
                                    </div>'
                                    ;
                                }
                                else
                                {
                                    echo '<a href="Click_Produto.php?produto='.$nome_.'">
                                    <img src="'.$link_imagem.'"
                                        class="hover-shadow cursor">
                                    <h4 class="Secundário">'.$nome_.'</h4>
                                    <span class="Secundário">'.$sexo.'</span>
                                    <br>
                                    <span class="Secundário">'.$preco."€".'</span>
                                </a>';
                                }
                            }
                        }
                        echo '
                            
                        </div>
                        <script>
                            function changeColor(event) {
                                var clickedButton = event.target;
                                let numero;
                                if (clickedButton.style.backgroundColor == "grey")
                                {
                                    clickedButton.style.backgroundColor = "white";
                                }
                                else
                                {
                                    clickedButton.style.backgroundColor = "grey";
                                    numero = clickedButton.textContent;
                                }
                            }  
                        
                        </script>
                    ';
                    echo '
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
                    </footer>';
                    //ver se tem outra forma de fazer
                    //INSERT INTO produtos(Nome_Produto, Preço_Produto, Descricao, género, link_Imagem. Marca) VALUES (informações que quero meter no Nome_Produto, Descricao...)
                } 
            }
        }
    ?>
</body>

</html>