<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
session_start();
if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST[senha];
    
    //Aqui será realizada uma consulta de banco de dados
    if ($usuario == 'teste' && $senha == 'teste'){
        
        
        $_SESSION['nome'] = 'Ana Maria'
    } else {
            $_SESSION ['msg'] = "Usuario ou senha incorreta!!!";
            header("Location: index.php");
            exit;
    }
} else if (!isset($_SESSION['nome'])) {
    header("Location: index.php");
        exit;
}

?>
<html>
    <head>
        <meta chaset="UTF-8"><!-- comment -->
        <title>Página de Menu </title>
    </head>
    <body>
        <h1>Usuário logado: <?php echo $_SESSION['nome']?></h1>
    <div>
        <a hrelf="menu.php"> Home </a><!-- comment -->
        <a href="logout.php"> Sair </a>
    </div>
    </body>
</html>
    

