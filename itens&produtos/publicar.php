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
    <title>Publique sua Obra aqui!</title>
    <link rel="stylesheet" href="publicar.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="caixa1">Publicar Obra</div>
    <div class="caixa2">
        <div class="caixa3">
            <div id="image-container" class="img">
                <img src="../imagens/ImagenG.png" width="300px" height="350px" class="imagem">
            </div>
            <form action="salvar_imagem.php" method="post" enctype="multipart/form-data">
            <input type="file" name="foto" id="image-input" class="envimg" style="display: none" onchange="sendImage()">
            <div class="botao1" value="foto" id="foto" onclick="openFileInput()">Importar capa</div>
        </div>
        <div class="caixa4">
                <div class="obra">
                    <input type="text" class="linha" id="titulo" name="nome" maxlength="100" placeholder="Dê um nome à sua obra..."
                        required><br>
                    <input type="text" class="linha" id="sinopse" name="sinopse" maxlength="256" placeholder="Insira uma sinopse..."
                        required>
                </div>
                <div class="caixa5">
                    <textarea class="linha2" id="capitulo" name="texto" placeholder="Escreva seu capítulo aqui..."
                        wrap="hard" required maxlength="125000"></textarea>
                </div>
            </div>
            <input type="submit" value="PUBLICAR" name="publicar" class="botao2">
        </div>
        </form>
    </div>

</body>
<script src="../java/animateto.js"></script>
<script>
    function openFileInput() {
        document.getElementById('image-input').click();
    }
    function sendImage() {
        var input = document.getElementById('image-input');
        var container = document.getElementById('image-container');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('image-preview');
                container.innerHTML = '';
                container.appendChild(img);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script src="../java/animateto.js"