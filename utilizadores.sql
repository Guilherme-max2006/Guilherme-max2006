-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Jun-2023 às 23:32
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `utilizadores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `Id_Utilizador` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Nome_Pessoa` varchar(40) NOT NULL,
  `Numero_Telefone` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`Id_Utilizador`, `username`, `Password`, `Nome_Pessoa`, `Numero_Telefone`) VALUES
(16, 'guimatado06@gmail.com', 'Paciencia2020', 'Guilherme', 936424765);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `Produto_ID` int(11) NOT NULL,
  `Nome_Produto` varchar(100) NOT NULL,
  `Preço_Produto` int(10) NOT NULL,
  `Descricao` varchar(1000) NOT NULL,
  `género` varchar(10) NOT NULL,
  `desporto` varchar(15) NOT NULL,
  `link_Imagem` varchar(100) NOT NULL,
  `Marca` varchar(10) NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`Produto_ID`, `Nome_Produto`, `Preço_Produto`, `Descricao`, `género`, `desporto`, `link_Imagem`, `Marca`, `Tipo`) VALUES
(1, 'Mochila Nike Academy Storm', 40, 'O tempo não te impede de treinar e também não te devia impedir de teres o equipamento seco. Quer esteja no chão ou suspensa, esta mochila foi concebida para aguentar as condições de jogo e treino mais desfavoráveis. A proteção contra a chuva proporciona resguardo com a tecnologia Storm-FIT, enquanto a malha confere respirabilidade e ventilação durante o bom tempo.', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Mochila Nike Academy Storm.jpg', 'Nike', 'Mochila Nike para Homem'),
(2, 'Nike Air Max Plus', 180, 'Revela a tua atitude com as Nike Air Max Plus, uma experiência Tuned Air que oferece estabilidade premium e um amortecimento incrível. Com as mesmas linhas de design onduladas das originais, detalhes em TPU e malha arejada na parte superior, estas sapatilhas celebram um estilo arrojado.', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Nike air max plus.jpg', 'Nike', 'Sapatos para Homem'),
(3, 'Camisola com capuz em Fleece Essentials', 51, 'Bem-vindo, mau tempo! Veste esta camisola com capuz para te aqueceres e permaneceres confortável quando o sol desaparece. Enfia as mãos no bolso marsupial para te aconchegares rapidamente.\r\n\r\nAo comprar os nossos produtos de algodão, estás a apoiar o cultivo de algodão mais sustentável. Este produto foi feito com material reciclado, como parte do nosso objetivo para acabar com o desperdício de plástico.', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Camisola com capuz em Fleece Essentials.jpg', 'Adidas', 'Camisola com capuz para Homem'),
(4, 'Calça pré-jogo AC Milan', 61, 'Prepare-se para iluminar o campo como os rossoneri nestas calças pré-jogo do AC Milan. Sua construção leve e absorvente de umidade deixará você pronto para dominar San Siro.', 'Homem', 'Futebol', 'Imagens_Produtos/Homem/Calças pré-jogo AC Milan.jpg', 'Puma', 'Calças de fato de treino para Homem'),
(5, 'Camisola Principal 22/23 Manchester United', 111, 'Se a tua equipa é... Manchester United Não esperes mais! Adquira já a primeira camisola do kit. Tem um ajuste clássico e também tem tecnologia AEROREADY respirável que mantém o suor afastado.', 'Homem', 'Futebol', 'Imagens_Produtos/Homem/Camisola Principal 23 do Manchester United.jpg', 'Adidas', 'Camisola de Futebol para Homem'),
(6, 'Calções de Praia Silver', 21, ' Descubra os incríveis calções de praia Silver! Perfeitos para aproveitar o sol e o mar com estilo e conforto. Feitos com materiais de alta qualidade, os calções de praia Silver são duráveis e possuem um design moderno. Com uma variedade de cores e padrões, você certamente encontrará o par perfeito para expressar o seu estilo único. Aproveite o verão com os calções de praia Silver e esteja preparado para arrasar na praia ou na piscina! ', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Calções de Praia Silver.jpg', 'Silver', 'Calções de Praia para Homem'),
(7, 'T-Shirt Puma Essentials ', 22, 'A t-shirt Puma Essentials+ para menino apresenta um grande estampado do gráfico da marca em borracha metálica e um ajuste normal de algodão.\r\n', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/T-Shirt Puma Essentials.jpg', 'Puma', 'T-Shirt para Homem'),
(8, 'T-Shirt Nike Miler', 23, 'T-shirt preta de running para homem da marca Nike. Peça transpirável graças ao seu tecido perforado leve com tecnologia Dri-FIT.', 'Homem', '', 'Imagens_Produtos/Homem/T-Shirt Nike Miler.jpg', 'Nike', 'T-Shirt para Homem'),
(9, 'Boné Era New York Yankees', 25, 'A New Era concebeu este boné para todos os fãs dos Yankees de Nova Iorque A tira traseira permite um ajuste sempre perfeito!', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Boné New Era New York Yankees.jpg', 'New York', 'Boné para Homem'),
(10, 'Nike Dunk Low Retro', 105, 'Explore a nostalgia com os incríveis sapatos Nike Dunk Low Retro! Esses tênis icônicos trazem de volta o estilo clássico dos anos 80, com um toque moderno. Com seu design atemporal e detalhes autênticos, os Nike Dunk Low Retro são perfeitos para os amantes de sneaker e para aqueles que desejam adicionar um toque retrô ao seu visual. Feitos com materiais de alta qualidade e tecnologia de ponta, esses sapatos oferecem conforto e durabilidade incomparáveis. Disponíveis em uma variedade de cores e edições limitadas, os Nike Dunk Low Retro são uma escolha versátil para qualquer ocasião. Eleve o seu estilo com esses clássicos reinventados e faça uma declaração de moda por onde quer que você vá!', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Nike Dunk Low Retro.jpg', 'Nike', 'Sapatos para Homem'),
(11, 'Nike Academy', 38, 'Domine o jogo com a Nike Academy! Se você é um jogador sério de futebol em busca de excelência, a Nike Academy é o seu caminho para o sucesso. Com programas de treinamento de elite, instalações de última geração e uma equipe de treinadores experientes, a Nike Academy oferece uma experiência única para aprimorar suas habilidades técnicas, táticas e físicas. Esteja preparado para enfrentar desafios, aprimorar sua resistência e elevar o seu jogo para o próximo nível. Junte-se à Nike Academy e faça parte de uma comunidade de atletas determinados a atingir o máximo de seu potencial. Com a Nike ao seu lado, você estará pronto para brilhar nos gramados e alcançar grandes conquistas.', 'Homem', 'Futebol', 'Imagens_Produtos/Homem/Nike Academy.jpg', 'Nike', 'Fato de treino para Homem'),
(12, 'Calções Own The Run Adidas', 30, 'Conquiste a corrida com os calções Own The Run da Adidas! Projetados para oferecer o máximo desempenho e conforto, esses calções são ideais para todos os corredores apaixonados. Feitos com tecidos leves e respiráveis, eles mantêm você fresco e seco mesmo nos treinos mais intensos. Com um ajuste ergonômico e tecnologia de absorção de impacto, os calções Own The Run garantem liberdade de movimento e suporte onde você mais precisa. Além disso, eles possuem bolsos convenientes para armazenar seus itens essenciais durante a corrida. Esteja preparado para superar seus limites e alcançar novas metas com os calções Own The Run da Adidas. Coloque-os, saia para correr e sinta a diferença em cada passada.', 'Homem', 'qualquer', 'Imagens_Produtos/Homem/Calções Own The Run Adidas.jpg', 'Adidas', 'Calções para Homem'),
(13, 'Calças de Fato de Treino Nike', 70, 'Eleve seu estilo esportivo com as calças de fato de treino Nike! Feitos para combinar conforto e estilo, esses calções são perfeitos para treinos, atividades físicas ou até mesmo para um look casual. Com tecidos leves e respiráveis, os calções de fato de treino Nike mantêm você confortável durante o exercício, permitindo uma ampla amplitude de movimento. Além disso, eles possuem bolsos práticos para armazenar pequenos itens essenciais. Com design moderno e o icônico logo da Nike, esses calções são um verdadeiro símbolo de autenticidade e qualidade. Experimente o conforto e o estilo imbatíveis dos calções de fato de treino Nike e desfrute de cada momento do seu treino com confiança.', 'Homem', 'Todos', 'Imagens_Produtos/Homem/Calças de Fato de Treino Nike.jpg', 'Nike', 'Calças de fato de treino para Homem'),
(14, 'Camisola com Capuz Neuclassics Adicolor', 50, 'Adicione um toque de estilo e conforto ao seu guarda-roupa com a camisola com capuz Neuclassics Adicolor! Esta camisola icônica combina o design clássico com a estética moderna da marca Neuclassics. Com um capuz ajustável e punhos elásticos, oferece um ajuste personalizado e confortável. O logotipo Adicolor estampado no peito adiciona um toque de autenticidade e estilo urbano. Feita com materiais de alta qualidade, a camisola com capuz Neuclassics Adicolor é perfeita para uso diário, proporcionando conforto e estilo. Escolha entre uma variedade de cores vibrantes e expressa o seu estilo único. Eleve o seu visual com esta peça versátil e atemporal e esteja pronto para se destacar em qualquer ocasião. ', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Camisola com Capuz Neuclassics Adicolor.jpg', 'Adidas', 'Camisola com capuz para Homem'),
(15, 'Nike Sportswear', 51, 'Explore o melhor do estilo esportivo com a Nike Sportswear! A marca Nike é sinônimo de qualidade, inovação e design excepcional, e a linha Sportswear não é exceção. Com uma ampla gama de roupas e acessórios, a Nike Sportswear oferece opções para todas as atividades esportivas e também para um estilo casual. Desde camisetas, calças e jaquetas até bonés, mochilas e tênis, a Nike Sportswear tem tudo que você precisa para se destacar com conforto e estilo. Com tecidos de alta qualidade, tecnologias avançadas e designs modernos, você pode esperar desempenho excepcional e um visual impecável. Seja para a academia, para um passeio ou para um encontro casual, a Nike Sportswear tem as peças certas para acompanhar seu estilo de vida ativo. Descubra a coleção Nike Sportswear e eleve seu estilo esportivo para o próximo nível!', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Nike Sportswear Tech Fleece.jpg', 'Nike', 'Calções para Homem'),
(16, 'Nike Court Vision Low Next Nature', 81, 'Experimente o visual inspirado na natureza com os tênis Nike Low Court Vision Next Nature! Esses tênis combinam o estilo retrô do modelo Court Vision com elementos naturais e terrosos, proporcionando um visual único e contemporâneo. Com sua parte superior de couro sintético durável e sobreposições de camurça, eles oferecem suporte e resistência. A entressola espessa e amortecida proporciona conforto durante todo o dia, enquanto a sola de borracha oferece tração e aderência. Além disso, os detalhes inspirados na natureza, como estampas florais sutis ou cores terrosas, adicionam um toque de estilo diferenciado. Se você procura por tênis que se destaquem com elegância e autenticidade, os Nike Low Court Vision Next Nature são a escolha perfeita. Explore a fusão da natureza e do estilo esportivo com esses tênis incríveis da Nike.', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Nike Court Vision Low Next Nature.jpg', 'Nike', 'Sapatos para Homem'),
(17, 'Nike Zoom Mercurial Superfly 9 Academy', 100, 'Eleve seu jogo para outro patamar com as chuteiras Nike Zoom Mercurial Superfly 9 Academy! Projetadas para os jogadores que buscam velocidade, agilidade e controle supremos, essas chuteiras combinam tecnologia avançada com estilo impecável. A parte superior em material sintético oferece suporte e ajuste precisos, enquanto a tecnologia Zoom Air proporciona amortecimento responsivo e retorno de energia explosivo a cada passo. A placa de solado em TPU com travas estrategicamente posicionadas oferece tração excepcional em todas as direções, permitindo movimentos rápidos e cortes precisos. Seja para jogos ou treinos intensos, as chuteiras Nike Zoom Mercurial Superfly 9 Academy são a escolha ideal para os jogadores ambiciosos que desejam dominar o campo. Equipe-se com o poder da Nike e prepare-se para voar em campo com confiança e estilo incomparáveis. ', 'Homem', 'Futebol', 'Imagens_Produtos/Homem/Nike Zoom Mercurial Superfly 9 Academy.jpg', 'Nike', 'Chuteiras para Homem'),
(18, 'T-Shirt de Basquete Puma', 35, 'Mostre sua paixão pelo basquete com a camiseta de basquete Puma! Feita com tecido macio e respirável, essa camiseta oferece conforto durante os jogos e treinos. Com seu design elegante e detalhes inspirados no basquete, como o logotipo da Puma e gráficos exclusivos, você vai se destacar no estilo dentro e fora das quadras. Além disso, a camiseta de basquete Puma é projetada para permitir movimentos amplos e facilitar o desempenho máximo durante as partidas. Se você é um jogador dedicado ou um fã apaixonado pelo esporte, essa camiseta é perfeita para mostrar sua conexão com o basquete. Equipe-se com a Puma e deixe sua marca no jogo com estilo e confiança.', 'Homem', 'Basquete', 'Imagens_Produtos/Homem/T-Shirt de basquete Puma.jpg', 'Puma', 'T-Shirt para Homem'),
(19, 'Nike Air Force LE', 121, 'Eleve seu estilo com o icônico Nike Air Force 1 LE! Estes tênis clássicos oferecem um visual atemporal e uma sensação de conforto incomparável. Com sua parte superior em couro premium, eles proporcionam durabilidade e um ajuste perfeito. A tecnologia Air-Sole na entressola oferece amortecimento responsivo a cada passo, enquanto a sola de borracha durável oferece tração e aderência em várias superfícies. Além disso, o design LE (Limited Edition) adiciona um toque exclusivo e diferenciado aos seus pés. Seja para o uso diário ou para ocasiões especiais, os Nike Air Force 1 LE são perfeitos para expressar seu estilo individual e fazer uma declaração de moda. Escolha entre uma variedade de cores e detalhes e faça destes tênis um item indispensável em seu guarda-roupa. Desfrute do conforto, estilo e autenticidade dos lendários Nike Air Force 1 LE!', 'Homem', 'Qualquer', 'Imagens_Produtos/Nike air force LE.jpg', 'Nike', 'Sapatos para Homem'),
(20, 'Sapatos Adidas Superstar ', 121, 'Adicione um toque clássico ao seu estilo com os icônicos sapatos Adidas Superstar! Com seu design icônico de biqueira de concha e as três listras distintas da Adidas nas laterais, os Superstar são um símbolo de estilo urbano e autenticidade. Feitos com materiais de alta qualidade, eles oferecem conforto duradouro e durabilidade. Além disso, a sola de borracha robusta proporciona tração e aderência em todas as superfícies. Seja para um look casual ou para um estilo mais sofisticado, os sapatos Adidas Superstar são uma escolha versátil que combina com qualquer roupa. Escolha entre uma variedade de cores e estilos para encontrar o par perfeito que reflita sua personalidade. Eleve seu estilo com os icônicos sapatos Adidas Superstar e esteja pronto para arrasar em qualquer ocasião.', 'Homem', 'Qualquer', 'Imagens_Produtos/Adidas_Superstar.jpg', 'Adidas', 'Sapatos para Homem'),
(21, 'Sapatos Adidas RunFalcon', 61, 'Supere seus limites com os sapatos Adidas RunFalcon! Projetados para corredores que buscam conforto, suporte e estilo, os RunFalcon oferecem uma combinação perfeita de desempenho e moda. Com uma parte superior em malha respirável e sobreposições sintéticas, esses sapatos proporcionam ajuste seguro e respirabilidade durante toda a corrida. A entressola leve oferece amortecimento responsivo, absorvendo o impacto a cada passo, enquanto a sola de borracha durável oferece tração confiável em várias superfícies. Além disso, o design moderno e elegante dos sapatos RunFalcon complementa qualquer roupa esportiva ou casual. Independentemente de você estar correndo na rua ou na esteira, os sapatos Adidas RunFalcon irão impulsionar o seu desempenho e mantê-lo confortável em cada quilômetro percorrido. Descubra o equilíbrio perfeito entre estilo e funcionalidade com os sapatos Adidas RunFalcon.', 'Homem', 'Qualquer', 'Imagens_Produtos/Homem/Sapatos Adidas RunFalcon.jpg', 'Adidas', 'Sapatos para Homem'),
(22, 'Nike Air Force 107', 119, 'O esplendor perdura nas Nike Air Force 1 \'07, o ícone de basquetebol que garante uma abordagem renovada daquilo que melhor conheces: pele trabalhada, cores arrojadas e a quantidade perfeita de destaque para que possas brilhar.', 'Homem', 'Qualquer', 'Imagens_Produtos/Nike air force 1 07.png', 'Nike', 'Sapatos para Homem'),
(23, 'Nike Air Jordan 1 Mid', 119, 'Inspirada nas AJ1 originais, esta edição de cano médio mantém o look icónico que adoras, enquanto a escolha de cores e a pele elegante lhe conferem uma identidade distinta.', 'Homem', 'Qualquer', 'Imagens_Produtos/Nike jordan.png', 'Nike', 'Sapatos para Homem'),
(24, 'Chuteiras Adidas Predator ', 290, 'Descubra todos os produtos de Chuteiras disponíveis na goalinn, como adidas Chuteiras Futebol Predator Accuracy.3 FG. Compre agora adidas Chuteiras Futebol Predator Accuracy.3 FG e poupe dinheiro numa série de produtos de Chuteiras de futebol. Além disso, a qualidade que a marca adidas lhe proporciona, faz com que a compra seja perfeita. Já sabe que pode comprar adidas Chuteiras Futebol Predator Accuracy.3 FG e outros produtos de desporto na nossa loja de futebol? Graças à goalinn, terá acesso a uma vasta seleção de artigos de Chuteiras, ideais para todas as modalidades de desporto imagináveis.', 'Homem', 'Futebol', 'Imagens_Produtos/Futebol/Chuteira Adidas Copa Sense.3 MG.jpg', 'Adidas', 'Chuteiras de futebol para Homem'),
(25, 'Nike Jordan Dunk Retro', 110, 'O Nike Dunk Low Black White apresenta uma parte superior em couro branco com inserções em couro preto para um contraste limpo. A marca NIKE pode ser encontrada na língua e sola exterior. O esquema de cores Black & White também continua nas solas da silhueta.', 'Homem', 'Qualquer', 'Imagens_Produtos/Nike dunk low.png', 'Nike', 'Sapatos para Homem');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id_Utilizador`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Produto_ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `Id_Utilizador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Produto_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
