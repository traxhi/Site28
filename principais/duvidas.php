<?php
include("../cadastro&login/conecta2.php");

if(isset($_POST["enviar"])) {
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $id_usuario = $_SESSION['id_usuario'];

    $comando = $pdo->prepare("INSERT INTO duvidas (id_usuario, email, mensagem) VALUES (?, ?, ?)");
    $resultado = $comando->execute([$id_usuario, $email, $mensagem]);

    if($resultado) {
        header("Location: mensagem.php");
        exit();
    } else {
        echo "Ocorreu um erro ao enviar a mensagem.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="duvidas.css">
</head>
<body>
    <?php
    include("../principais/menu.html");
    ?>

    <div class="container">
        <h2>Fale Conosco</h2>
        <form action="duvidas.php" method="post">
            <label for="nome" >Nome</label>
            <input type="text" class="nome" id="nome" name="nome" placeholder="Seu nome" required><br>

            <label for="email" >Email</label>
            <input type="email" class="email" id="email" name="email" placeholder="Seu email" required><br>

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" class="msg" name="mensagem" onkeypress="return searchKeyPress(event)" placeholder="Digite sua mensagem" required></textarea>
            <input type="submit" value="Enviar" name="enviar" class="">
        </form>
        <div class="caixa">
            <a href="https://www.instagram.com/_haydavi_/"><img src="../imagens/instagram.png" width="42px"></a>
            <a href="https://www.facebook.com/profile.php?id=100008209638109"><img src="../imagens/facebook.png" width="40px"></a>
            <a href=""><img src="../imagens/email.png" width="40px"></a>
        </div>
    </div>
   <a href="lgpd.php"> <div class="lgpd">Política de Privacidade</div><a>
</body>
<script src="../java"></script>
</html>
