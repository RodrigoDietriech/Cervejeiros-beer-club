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
        <form><input type="search" class="busca">
            <input type="image" src="_imagens/lupa.png" alt="lupa de pesquisa" class="lupa">
        </form>
        <a href="#"><p class="carrinho">Nenhum item no seu carrinho</p></a>
        <nav class="menu_opcoes">
            <ul>
                <li><a href="index.php">Home</a></li>
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
            <section class="painel" id="produto">
                <?php require_once('MySqli.php');
                $id_ceva = $_GET['id_ceva'];
                        $sql = "SELECT * FROM `TB_CERVEJAS` 
                        WHERE ID_CERVEJA = $id_ceva";
                        $query = $mysqli->query($sql);
                        $dados = $query->fetch_assoc() ?>
                <hgroup>
                    <h1 id="titulo_prod"><?php echo $dados['NOME_CERVEJA']?></h1>
                    <h2><img src="_imagens/<?php echo $dados['NOME_CERVEJA']?>.png" alt="Cerveja <?php $dados['NOME_CERVEJA']?>" id="cerveja"</h2>
                </hgroup>    
                    <div class="descricao">
                        <p>AQ FICA A DECRIÇÃO OLA</p>
                    </div>
                    <p id="preco">R$ <?php echo $dados['VALOR_CERVEJA'] ?></p>
                    <a href="#">
                        <img src="_imagens/adicionar_carrinho.png" alt="Adicionar ao carrinho" id="add_carrinho">
                    </a>
                    <a href="#">
                        <img src="_imagens/botao_comprar.png" alt="Botão comprar" id="bt_comprar">
                    </a>
            </section>
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