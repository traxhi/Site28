<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <link rel="stylesheet" href="autenticacao.css">
    <script>
        function validarCodigo() {
            var codigo = document.getElementById('txtBusca').value;
            if (codigo.length === 6 && /^\d+$/.test(codigo)) {
                window.location.href = '../compra/pagamento.php';
            } else {
                alert('Por favor, insira um código de 6 dígitos válido.');
            }
        }
    </script>
</head>

<body>
    <?php
    include("../principais/menu.html")
    ?>
    <div class="embaixo">
        <div class="insira">Insira o código de 6 dígitos que enviamos em seu e-mail para confirmar seu cadastro</div>
        <input type="text" id="txtBusca" class="Codigo" />
        <a href="autenticacao.html">
            <div class="reenviar">Reenviar código</div>
        </a>
    </div>
    <div class="botao1">
        <button onclick="validarCodigo()">CONTINUAR</button>
    </div>
    </div>
</body>
<script src="../java/animateto.js"></script>

</html>