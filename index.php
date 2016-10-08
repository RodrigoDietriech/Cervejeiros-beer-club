<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<title>Cervejeiros Beer Club</title>
<link rel="stylesheet" type="text/css" href="_css/reset.css"/> 
<link rel="stylesheet" type="text/css" href="_css/estilo.css"/> 
</head>
<body>
	<header id="cabecalho" class="container">
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <h1><img src="_imagens/logo.png" alt="Cervejeiros beer club" id="logo"></h1>
        <form method="get" action="MySqli.php">
            <input type="search" name="texto_busca" class="busca">
            <input type="image" src="_imagens/lupa.png" alt="lupa de pesquisa" class="lupa">
        </form>
        <a href="#">
            <p class="carrinho">Nenhum item no seu carrinho</p>
        </a>
        <nav class="menu_opcoes">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Lista de desejos</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Fale Conosco</a></li>
            </ul>
        </nav>
	</header>
    <section id="principal">
        <div class="paineis">
            <nav>
                <h1>Categorias</h1>
                <ol>
                    <li>
                        <a href="#">Americanas</a>
                        <ul>
                            <li><a href="#">Teste1</a></li>
                            <li><a href="#">Teste2</a></li>
                            <li><a href="#">Teste3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Belgas</a></li>
                    <li><a href="#">Alemas</a></li>
                    <li><a href="#">Brasileiras</a></li>
                    <li><a href="#">Pale Ale</a></li>
                    <li><a href="#">Weiss</a></li>
                </ol>
            </nav>
            <section class="painel painel_promocao">
                <h2>Cervejas em promocao</h2>
                <ol> 
                     <?php
                        require_once('MySqli.php');
                        $sql = "SELECT * FROM `TB_CERVEJAS` LIMIT 4";
                        $query = $mysqli->query($sql);
                    while ($dados = $query->fetch_assoc()) { ?>
                        <li>
                            <a href="produto.php?id_ceva=<?php echo $dados['ID_CERVEJA'] ?>">
                            <figure>
                                <img src="_imagens/<?php echo $dados['NOME_CERVEJA']; ?>.png">
                                <figcaption><?php echo $dados['NOME_CERVEJA']; ?> por R$ <?php echo $dados['VALOR_CERVEJA']; ?></figcaption>
                            </figure>
                            </a>
                        </li>
                    <?php } ?>
                </ol>
            </section>
            
            <secttion class="painel painel_vendidos">
                <h2>Cervejas mais vendidas</h2>
                <ol>
                    <?php
                        $sql = "SELECT * FROM `TB_CERVEJAS` WHERE ID_CERVEJA > 4 LIMIT 4 ";
                        $query = $mysqli->query($sql);
                    while ($dados = $query->fetch_assoc()) { ?>
                    <li>
                        <a href="produto.php?id_ceva=<?php echo $dados['ID_CERVEJA'] ?>">
                        <figure>
                            <img src="_imagens/<?php echo $dados['NOME_CERVEJA']; ?>.png">
                            <figcaption><?php echo $dados['NOME_CERVEJA']; ?> por R$ <?php echo $dados['VALOR_CERVEJA']; ?></figcaption>
                        </figure>
                        </a>
                    </li>
                    <?php } ?>
                </ol>
            </secttion>
        </div>
    </section>
    <footer class="container rodape">
        <h2><img src="_imagens/logo2.png" alt="Cervejeiros beer club"></h2>
        <section class="redes_sociais">
            <p class="rede">Siga nossas redes sociais</p>
            <ol>
                <li>
                    <a href="#">
                        <figure>
                            <img src="_imagens/Facebook-Icon.png" alt="link Facebook">
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="_imagens/you-icon.png" alt="link YouTube">
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="_imagens/tw-icon.png" alt="link Twitter">
                        </figure>
                    </a>
                </li>
            </ol>
        </section>
    </footer>
</body>
</html>