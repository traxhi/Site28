<?php 
    session_start();
    include("conecta4.php");

    // Verificar se o usuário está autenticado
    if (!isset($_SESSION['login']) || ($_SESSION['login'])=="") {
        header("Location: login.php");
        exit();
    }

    $email = $_SESSION["login"];

    // Recupera as informações do usuário do banco de dados
    $comando = $pdo->prepare("SELECT nome, bio, senha, foto FROM cadastropedro WHERE email = :email");
    $comando->bindValue(":email", $email);
    $comando->execute();

    // Atribui os valores recuperados às variáveis correspondentes
    $resultado = $comando->fetch();
    $nome = $resultado['nome'];
    $biografia = $resultado['bio'];
    $senha = $resultado['senha'];
    $caminhofoto = $resultado['foto'];
    $base64Imagem = base64_encode($caminhofoto);

    if (empty($caminhofoto)) {
        $caminhofoto = "../imagens/ImagenG.png";
        $base64Imagem = base64_encode(file_get_contents($caminhofoto));
    }

    // Verificar se o formulário foi enviado
    if (isset($_POST['salvar'])) {
        // Processar os dados do formulário e atualizar no banco de dados
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $confirmarSenha = $_POST['confirmarSenha'];
        $biografia = $_POST['bio'];
        
        if ($senha !== $confirmarSenha) {
            $mensagemErro = "A senha e a confirmação de senha não correspondem.";
        } else {
            // Verifica se uma nova foto foi enviada
            if (!empty($_FILES["foto"]["tmp_name"])) {
                try {
                    $foto = file_get_contents($_FILES["foto"]["tmp_name"]);
                    $comando = $pdo->prepare("UPDATE cadastropedro SET nome=:nome, senha=:senha, bio=:bio, foto=:foto WHERE email=:email");
                    $comando->bindParam(":foto", $foto, PDO::PARAM_LOB);
                } catch (Exception $e) {
                    // Tratamento de erro ao obter a foto
                    die("Erro ao obter a foto: " . $e->getMessage());
                }
            } else {
                // Caso nenhuma nova foto tenha sido enviada, remove a coluna 'foto' do comando SQL
                $comando = $pdo->prepare("UPDATE cadastropedro SET nome=:nome, senha=:senha, bio=:bio WHERE email=:email");
            }

            // Define os parâmetros restantes e executa o comando SQL
            $comando->bindParam(":nome", $nome);
            $comando->bindParam(":senha", $senha);
            $comando->bindParam(":email", $email);
            $comando->bindParam(":bio", $biografia);

            try {
                $resultado = $comando->execute();
                header("Location: perfil.php");
                exit();
            } catch (Exception $e) {
                // Tratamento de erro ao executar o comando SQL
                die("Erro ao atualizar o perfil: " . $e->getMessage());
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfil.css">
</head>

<body>
    <?php
        include("../principais/menu.html");
    ?>
    <div class="caixa1">Meu Perfil</div>
    <div class="caixa2">
        <div class="caixa3">
            <div id="image-container">
                <img src="data:image/jpeg;base64,<?php echo $base64Imagem; ?>" width="300px" height="350px" class="imagem">
            </div>
            <form action="perfil.php" method="post" enctype="multipart/form-data">
                <input type="file" name="foto" id="image-input" class="envimg" style="display: none" onchange="sendImage()">
                <div class="botao1" value="foto" id="foto" onclick="openFileInput()">Importar capa</div>
        </div>
        <div class="caixa4">
            <div class="obra">
                <input type="text" class="linha" id="nome" name="nome" value="<?php echo isset($mensagemErro) ? $resultado['nome'] : $nome; ?>" maxlength="100" placeholder="Nome" required><br>
                <input type="text" class="linha" id="email" name="email" value="<?php echo $email; ?>" maxlength="100" placeholder="E-Mail" readonly>
                <br>
                <input type="password" class="linha" id="senha" name="senha" value="<?php echo isset($mensagemErro) ? $resultado['senha'] : $senha; ?>" maxlength="100" placeholder="Senha" required>
                <input type="password" class="linha" id="confirmarSenha" name="confirmarSenha" value="<?php echo isset($mensagemErro) ? $resultado['senha'] : $senha; ?>" maxlength="100" placeholder="Confirmar Senha" required>
                <?php if (isset($mensagemErro)) { ?>
                <p class="alerta"><?php echo $mensagemErro; ?></p>
                <?php } ?>
            </div>
            <div class="caixa5">
                <textarea class="linha2" id="capitulo" name="bio" placeholder="Biografia..." wrap="hard" required maxlength="500"><?php echo isset($mensagemErro) ? $resultado['bio'] : $biografia; ?></textarea>
            </div>
        </div>
        <input type="submit" value="Salvar" name="salvar" class="botao2">
        </form>
        <form action="logout.php" method="post">
            <input type="submit" value="Log out" name="logout" class="botao3">
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

</html>
