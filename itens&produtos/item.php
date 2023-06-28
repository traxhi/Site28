<?php
session_start(); // Inicia a sessão

include("conecta3.php");

// Verifica se o formulário foi submetido e se o usuário está logado
if (isset($_POST["avaliar"]) && isset($_SESSION["id_usuario"])) {
    $comentario = $_POST["comentario"];
    $nota = $_POST["nota"]; // Captura a nota selecionada pelo usuário
    $usuario = $_SESSION["id_usuario"];

    // Insere o comentário e a nota no banco de dados
    $comando = $pdo->prepare("INSERT INTO comentarios (comentario, nota) VALUES (?, ?)");
    $resultado = $comando->execute([$comentario, $nota]);
    
    $idnovo = $pdo->lastInsertId();
    $comando2 = $pdo->prepare("INSERT INTO leitura_avaliacao (id_usuario, id_obra, id_comentario) VALUES (?, 27, ?)");
    $resultado2 = $comando2->execute([$usuario, $idnovo]);
}
// Obtém a média das notas
$comando = $pdo->prepare("SELECT AVG(nota) AS media FROM comentarios");
$comando->execute();
$media = $comando->fetchColumn();

$notaAtual = round($media);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artigo - Mente & Coração</title>
    <link rel="stylesheet" href="item.css">
</head>

<body>
    <?php include("../principais/menu.html") ?>
    <div class="D1">
        <div class="D2">
            <div class="imagem2">
                <img src="../imagens/livro2.png" alt="imagem1" height="500" width="300">
            </div>
        </div>
        <div class="D3"></div>
        <div class="D2">
            <div class="titulo">
                Mente & Coração <br>
                <div class="tag">
                    ARTIGO <br>
                </div>
                <div class="descricao">
                    "Uma Exploração da Conexão entre o Cérebro e as Emoções." <br>
                    O artigo investiga como as emoções podem afetar <br>
                    a saúde física e mental. <br>
                    <br>
                </div>
                <a href="../itens&produtos/Lercapitulo.php" class="botaoler"> <button> LER </button></a>
                <div class="estrelas">
                    <img onclick="Preencher('estrela1');"
                        src="<?php echo $notaAtual >= 1 ? '../imagens/star1.png' : '../imagens/star0.png'; ?>"
                        width="25px" class="estrela" id="estrela1">
                    <img onclick="Preencher('estrela2');"
                        src="<?php echo $notaAtual >= 2 ? '../imagens/star1.png' : '../imagens/star0.png'; ?>"
                        width="25px" class="estrela" id="estrela2">
                    <img onclick="Preencher('estrela3');"
                        src="<?php echo $notaAtual >= 3 ? '../imagens/star1.png' : '../imagens/star0.png'; ?>"
                        width="25px" class="estrela" id="estrela3">
                    <img onclick="Preencher('estrela4');"
                        src="<?php echo $notaAtual >= 4 ? '../imagens/star1.png' : '../imagens/star0.png'; ?>"
                        width="25px" class="estrela" id="estrela4">
                    <img onclick="Preencher('estrela5');"
                        src="<?php echo $notaAtual >= 5 ? '../imagens/star1.png' : '../imagens/star0.png'; ?>"
                        width="25px" class="estrela" id="estrela5">
                    <div class="media-notas">Média das avaliações:
                        <?php echo round($media, 2); ?>
                    </div> <!-- Exibe a média das notas -->
                </div>
                <?php if (isset($_SESSION["id_usuario"])): ?>
                    <form action="item.php" method="post">
                        <textarea class="linha2" id="comentario" name="comentario" placeholder="Adicione um comentário..."
                            wrap="hard" maxlength="2500"></textarea>
                        <input type="hidden" id="nota" name="nota" value="0">
                        <!-- Campo oculto para armazenar a nota selecionada -->
                        <button type="submit" class="botao1" name="avaliar"> Avaliar </button>
                    </form>
                <?php else: ?>
                    <div class="mensagem-login">Faça login para avaliar o artigo.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="../java/animateto.js"></script>
    <script>
        function Preencher(qual) {
            var indice = parseInt(qual.substr(7)) - 1;
            notaAtual = indice + 1;
            marcarEstrelas();
            document.getElementById('nota').value = notaAtual; // Atualiza o valor do campo oculto 'nota'
        }

        function marcarEstrelas() {
            var estrelas = document.getElementsByClassName('estrela');

            for (var i = 0; i < estrelas.length; i++) {
                if (i < notaAtual) {
                    estrelas[i].src = "../imagens/star1.png";
                } else {
                    estrelas[i].src = "../imagens/star0.png";
                }
            }
        }

        window.onload = marcarEstrelas;
    </script>
</body>

</html>
