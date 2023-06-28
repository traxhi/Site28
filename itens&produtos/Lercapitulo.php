<?php
session_start();

if (!isset($_SESSION['login']) || ($_SESSION['login']) == "") {
    header("Location: ../cadastro&login/login.php");
    exit();
}


include("conecta3.php");

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
    <title>Ler Capítulo</title>
    <link rel="stylesheet" href="Lercapitulo.css">
</head>

<body>
    <?php
    include("../principais/menu.html");
    ?>
    <br>
    <div class="lercap">
        <div class="livro">Mente e Coração</div><br>
        <div class="capitulo">CAPÍTULO 1</div>
        <br><br>
        <div class="caixa">
            <div class="cxitem">
                <div class="item">
                    <a href="../itens&produtos/item.php"><img src="../imagens/livro2.png" class="img" width="100%"
                            height="270px"><br></a>
                    Mente e Coração
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
                    </div>
                    <div class="media-notas">Média das avaliações:
                        <?php echo round($media, 2); ?>
                    </div>
                </div>
            </div>
            <div class="texto">
                O artigo "Mente e Coração" é uma investigação profunda sobre a complexa relação entre a mente e o
                coração humano. Em meio a avanços científicos e descobertas sobre o funcionamento do cérebro, surge uma
                pergunta fundamental: como as emoções são processadas e influenciadas por nossos pensamentos e estados
                mentais? Nesta pesquisa abrangente, o autor mergulha nas nuances da neurociência, psicologia e filosofia
                para desvendar a dinâmica entre a mente e o coração. Explora-se o papel do sistema límbico e das
                estruturas cerebrais relacionadas na geração e regulação das emoções, bem como a influência dos
                processos cognitivos e da percepção na maneira como sentimos e experimentamos o mundo ao nosso redor.
                Além disso, o artigo investiga como as emoções podem afetar a saúde física e mental, abordando estudos
                recentes que revelam a conexão entre estresse emocional crônico e doenças cardíacas, bem como a
                importância de um equilíbrio emocional para uma vida saudável e satisfatória. À medida que a pesquisa
                avança, são exploradas as implicações dessas descobertas para a psicoterapia, medicina e intervenções
                terapêuticas. Aborda-se a importância do autogerenciamento emocional e do desenvolvimento da
                inteligência emocional como ferramentas para melhorar a qualidade de vida e promover o bem-estar mental.
                Com base em evidências científicas e teorias atualizadas, "Mente e Coração" oferece aos leitores uma
                visão abrangente e esclarecedora sobre a relação entre o cérebro e as emoções. Este artigo busca
                desvendar os mistérios subjacentes a essa conexão vital, fornecendo uma base sólida para futuras
                pesquisas e reflexões no campo da neurociência afetiva e saúde mental. Por fim, "Mente e Coração"
                conclui destacando a importância de um diálogo construtivo entre a razão e a emoção, e como a
                compreensão dessa interação pode levar a um maior autoconhecimento e crescimento pessoal. O artigo
                encoraja uma abordagem holística para a compreensão da mente humana, buscando uma harmonia entre a
                racionalidade e a afetividade, a fim de promover uma vida plena e significativa. Nesta pesquisa
                abrangente, o autor mergulha nas nuances da neurociência, psicologia e filosofia para desvendar a
                dinâmica entre a mente e o coração. Explora-se o papel do sistema límbico e das estruturas cerebrais
                relacionadas na geração e regulação das emoções, bem como a influência dos processos cognitivos e da
                percepção na maneira como sentimos e experimentamos o mundo ao nosso redor. Além disso, o artigo
                investiga como as emoções podem afetar a saúde física e mental, abordando estudos recentes que revelam a
                conexão entre estresse emocional crônico e doenças cardíacas, bem como a importância de um equilíbrio
                emocional para uma vida saudável e satisfatória. Com base em evidências científicas e teorias
                atualizadas, "Mente e Coração" oferece aos leitores uma visão abrangente e esclarecedora sobre a relação
                entre o cérebro e as emoções. Este artigo busca desvendar os mistérios subjacentes a essa conexão vital,
                fornecendo uma base sólida para futuras pesquisas e reflexões no campo da neurociência afetiva e saúde
                mental. Por fim, "Mente e Coração" conclui destacando a importância de um diálogo construtivo entre a
                razão e a emoção, e como a compreensão dessa interação pode levar a um maior autoconhecimento e
                crescimento pessoal. O artigo encoraja uma abordagem holística para a compreensão da mente humana,
                buscando uma harmonia entre a racionalidade e a afetividade, a fim de promover uma vida plena e
                significativa.
            </div>
            <div class="cxitem2">
                <div class="item">
                    Entre em contato conosco <br>
                    através de nosso e-mail ↓<br>
                    <a href="https://mail.google.com/mail/u/0/#inbox">
                        <br> <button class="caixaemail">Fale Conosco</button><br>
                    </a>
                </div>
            </div>
        </div><br>

        <a href="../itens&produtos/Lercapitulo.php">
            <button class="prox2">Próximo Capítulo ➜</button><br>
        </a><br>
    </div>

</body>
<script src="../java/animateto.js"></script>
<script>
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

</html>