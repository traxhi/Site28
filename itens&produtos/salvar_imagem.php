<?php
        include("conecta3.php");
        session_start();

        $nome = $_POST["nome"];
        $sinopse = $_POST["sinopse"];
        $texto = $_POST["texto"];
		$foto = file_get_contents($_FILES["foto"]["tmp_name"]);
        $id_usuario = $_SESSION["id_usuario"];

		$comando = $pdo->prepare("INSERT INTO obra(nome,sinopse,texto,foto,id_usuario) VALUES(:nome,:sinopse,:texto,:foto,:id_usuario)");
        $comando->bindParam(":nome", $nome);
        $comando->bindParam(":sinopse", $sinopse);
        $comando->bindParam(":texto", $texto);
        $comando->bindParam(":foto", $foto, PDO::PARAM_LOB);
        $comando->bindParam(":id_usuario", $id_usuario);
		$resultado = $comando->execute();
        header("Location:publicar.php");

        $comando = $pdo->prepare("SELECT * FROM obra");
		$resultado = $comando->execute();
        while( $linhas = $comando->fetch() )
        {
            $dados_imagem = $linhas["foto"];
            $i = base64_encode($dados_imagem);

            $nome =  $linhas["nome"];
            $sinopse =  $linhas["sinopse"];
            $texto =  $linhas["texto"];

            echo("NOME: $nome SINOPSE: $sinopse TEXTO: $texto <br>");
            echo(" <img src='data:image/jpeg;base64,$i' width='100px'> <br> <br> ");
        }
		
?>