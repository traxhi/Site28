<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
    <link rel="stylesheet" href="autores.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="pesquisa">
        <div class="barra"><input type="text" id="txtBusca" placeholder="Buscar..." maxlength="256" /><img
                src="../imagens/Lupa.png" class="lupinha" height="30px"></div>
    </div>
    <div class="produtos">
        <div class="itens1">
            <div class="item1">
                <img src="../imagens/autoresball (1).png" width="90%" height="300px">
                Edin Nolat
                <a href="../autor/biografia2.php">
                    <button class="botaover">Ver</button>
                </a>
            </div>
            <div class="item2">
                <img src="../imagens/autoresball (2).png" width="90%" height="300px">
                Sarah Lee
                <a href="../autor/biografia.php">
                    <button class="botaover">Ver</button>
                </a>
            </div>
            <div class="item3">
                <img src="../imagens/autoresball (3).png" width="90%" height="300px">
                Jonas Smith
                <a href="../autor/biografia3.php">
                    <button class="botaover">Ver</button>
                </a>
            </div>
            <div class="item4">
                <img src="../imagens/autoresball (4).png" width="90%" height="300px">
                 Theo Jackson
                <a href="../autor/biografia4.php">
                    <button class="botaover">Ver</button>
                </a>
            </div>
        </div>
    </div>

    </div>
    <a href="../autor/autores.php">
        <div class="mais">
            Mais Autores
        </div>
    </a>

</body>
<script src="../java/animateto.js"></script>

</html>