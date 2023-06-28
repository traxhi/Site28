<?php
session_start();

// Limpa todas as variáveis de sessão
$_SESSION['login']="";


// Redireciona para a página de login
header("Location: login.php");
?>