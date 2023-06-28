<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <?php
    if (isset($_POST["cadastrar"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmarSenha = $_POST["confirmarSenha"];

        if ($senha !== $confirmarSenha) {
            $mensagemErro = "A senha e a confirmação de senha não correspondem.";
        } else {
            include("conecta2.php");
            
            // Verifica se o email já existe no banco de dados
            $comandoVerifica = $pdo->prepare("SELECT COUNT(*) FROM cadastropedro WHERE email = :email");
            $comandoVerifica->bindParam(':email', $email);
            $comandoVerifica->execute();
            $existeEmail = $comandoVerifica->fetchColumn();

            if ($existeEmail) {
                $mensagemErro = "O email fornecido já está cadastrado.";
            } else {
                $comando = $pdo->prepare("INSERT INTO cadastropedro (nome, email, senha) VALUES (:nome, :email, :senha)");
                $comando->bindParam(':nome', $nome);
                $comando->bindParam(':email', $email);
                $comando->bindParam(':senha', $senha);
                $resultado = $comando->execute();
                header("Location: autenticacao.php");
            }
        }
    }
    include("../principais/menu.html");
    ?>
    <div class="cadastro">
        <img src="../imagens/perfil.png" width="150" height="150" class="perfil">
        <form action="cadastro.php" method="post">
            <label for="nome" class="linha"> Nome</label>
            <input type="text" class="linha" id="nome" name="nome" required>
            <label for="email" class="linha">E-mail</label>
            <input type="email" class="linha" id="email" name="email" required>
            <label for="senha" class="linha">Senha</label>
            <input type="password" class="linha" id="senha" name="senha" required>
            <label for="senha" class="linha">Confirmar Senha</label>
            <input type="password" class="linha" id="confirmarSenha" name="confirmarSenha" required>
            <?php if (isset($mensagemErro)) { ?>
                <p class="alerta"><?php echo $mensagemErro; ?></p>
            <?php } ?>
            <input type="submit" value="CADASTRAR" name="cadastrar" class="botao">
        </form>
        <script src="../java/animateto.js"></script>
    </div>
</body>

</html>
