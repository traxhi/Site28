<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações de pagamento</title>
    <link rel="stylesheet" href="cartao.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="embaixo">
        <div class="retan1">
            <div class="Dados">Dados do Titular do Cartão</div>
            <br>
            <div class="Numero">Número do Cartão</div>
            <input type="text" class="numero">
            <div class="valicode">
                <div class="validade">
                    Validade
                    <input type="text" class="vali">
                </div>
                <div class="codigo">
                    CVV
                    <input type="text" class="CVV">
                </div>
            </div>
            <div class="Nome">Nome Completo</div>
                <input type="text" class="nome">
            <div class="CPF">CPF</div>
                <input type="text" class="cpf">
            <div class="teda">
                <div class="telefone">
                    Telefone
                    <input type="text" class="tele">
                </div>
            </div>
            <br><br>
            <div class="opc"><br>
                Selecione uma opção de pagamento:
                <select id="estado" class="para">
                    <option>1x de R$80,00 </option>
                    <option>2x de R$40,00 </option>
                    <option>6x de R$13,50 </option>
                    <option>12x de R$7,00 </option>
                </select>
            </div>

        </div>
        <div class="retan2">
            <img src="../imagens/cartaozao.png" class="cartao">
        </div>

        <div class="retan3">
            <div class="borda">
                <div class="parte1">Informações da Assinatura</div>
                <div class="parte3">
                    <div class="forma">Forma de Pagamento</div>
                    <div class="ca">
                        <div class="cc">Cartão de Credito</div>
                    </div>
                </div>
                <div class="parte4">
                    <div class="tempo">Tempo de Processamento</div>
                    <div class="util">Até 2 dias úteis</div>
                </div>
                <div class="parte5">
                    <div class="ult1">1x de 80,00</div>
                    <div class="ult2">
                        <div class="totall">Total a pagar:</div>
                        <div class="deze">R$80,00</div>
                    </div>
                </div>
            </div>
            <div class="botao">
                <a href="../compra/conclusaocompra.php"><button>FINALIZAR COMPRA</button></a>
            </div>
        </div>
    </div>
</body>
<Script src="../java/animateto.js"></Script>

</html>