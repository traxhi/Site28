<?php
session_start();

if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
    header("Location: ../cadastro&login/login.php");
    exit();
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Leituras</title>
    <link rel="stylesheet" href="../itens&produtos/leituras.css">
</head>
<body>
<?php
    include("../principais/menu.html")
        ?>
    <div class="pesquisa">
        <div class="filtro"><img src="../imagens/FILTRO.png" width="20px" class="Filtrao">Filtrar por
            <select id="Filtross" class="filtrosss">
                <option selected>Todos</option>
                <option>Artigo</option>
                <option>Manuscrito</option>
                <option>Texto</option>
               </select></div>
            <div class="barra">
                <input type="text" id="txtBusca" placeholder="Buscar..." maxlength="256"/>
                <img src="../imagens/Lupa.png" class="lupinha" height="30px">
            </div>
    </div>
    <br><br>
    <div class="produtos">
        <div class="itens1">
            <div class="item1">
                <img src="../imagens/livro2.png" width="90%" height="300px">
                Mente e Coração
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
            <div class="item2">
                <img src="../imagens/livro3.png" width="90%" height="300px">
                Por Onde Você For
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
            <div class="item3">
                <img src="../imagens/livro1.png" width="90%" height="300px">
                Senhorita
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
        </div>
            
    </div>
    <div class="produtos">
        <div class="itens1">
            <div class="item1">
                <img src="../imagens/livro4.png" width="90%" height="300px">
                Psicologia e Visão
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
            <div class="item2">
                <img src="../imagens/DiamanteDourado.jfif" width="90%" height="300px">
                Diamante Dourado
                <a href="../itens&produtos/item.php"><div class="botaoler">LER</div></a>
            </div>
        </div>
    </div>
</body>
<script src="../java/animateto.js"></script>
</html>