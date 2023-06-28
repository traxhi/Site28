<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textos</title>
    <link rel="stylesheet" href="textos.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="pesquisa">
        <div class="filtro"><img src="../imagens/FILTRO.png" width="20px" class="filtrao">Filtrar por
            <select id="Filtross" class="filtrosss">
                <option selected>Todos</option>
                <option>Artigo</option>
                <option>Manuscrito</option>
                <option>Texto</option>
            </select>
        </div>
        <div class="barra"><input type="text" id="txtBusca" placeholder="Buscar..." maxlength="256" /><img
                src="../imagens/Lupa.png" class="lupinha" height="30px"></div>
    </div>
    <div class="produtos">
            <div class="item">
                <img src="../imagens/livro1.png" class="img" width="90%" height="270px"><br>
                Senhorita
                <a href="../itens&produtos/item.php">
                    <br><button class="botaoler">Ler</button><br>
                </a>
            </div>
            <div class="item">
                <img src="../imagens/livro2.png" class="img" width="90%" height="270px"><br>
                Mente e Coração
                <a href="../itens&produtos/item.php">
                    <br><button class="botaoler">Ler</button><br>
                </a>
            </div>
            <div class="item">
                <img src="../imagens/livro3.png" class="img" width="90%" height="270px"><br>
                Por Onde Você For
                <a href="../itens&produtos/item.php">
                    <br><button class="botaoler">Ler</button><br>
                </a>
            </div>
    </div>

</body>
<script src="../java/animateto.js"></script>

</html>