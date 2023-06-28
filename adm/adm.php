<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do ADM</title>
    <link rel="stylesheet" href="adm.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="cadastro">
        <img src="../imagens/perfil.png" width="150" height="150" class="perfil">
        <form action="crud.php" method="post">
            <label for="nome" class="linha"> Nome</label>
            <input type="text" class="linha" id="nome" name="nome" required>
            <label for="email" class="linha">E-mail</label>
            <input type="email" class="linha" id="email" name="email" required>
            <label for="senha" class="linha">Senha</label>
            <input type="password" class="linha" id="senha" name="senha" value="senha" required>
            <label for="senha" class="linha">Confirmar Senha</label>
            <input type="password" class="linha" id="confirmarSenha" name="confirmarSenha" value="confirmarSenha"
                required>
            <div class="botao1">
                <input type="submit" value="CADASTRAR" name="inserir" class="botao2">
                <input type="submit" value="EXCLUIR" name="excluir" class="botao2">
                <input type="submit" value="ALTERAR" name="alterar" class="botao2">
                <input type="submit" value="LISTAR" name="listar" class="botao2">
            </div>
        </form>
    </div>
</body>
<script src="../java/animateto.js"></script>

</html>