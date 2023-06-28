<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pagamento.css">
</head>

    <body>
    <?php
    include("../principais/menu.html")
        ?>
        <div class="embaixo">
            <div class="pergunta">
                Escolha a forma de pagamento
            </div>
            <div class="opcoes">
                <div class="op">
                    <input type="radio" name="a"> &nbsp; Cartão de Crédito
                </div>
                <div class="op">
                    <input type="radio" name="a"> &nbsp; Boleto
                </div>
                <div class="op">
                    <input type="radio" name="a"> &nbsp; Pix
                </div> 
            </div>
            <div class="botao">
                <a href="../compra/cartao.php">
                <button>Pagar</button>
                 </a>
            </div>
        </div>

</body>
<script src="../java/animateto.js"></script>
</html>