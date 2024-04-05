<?php session_start(); ?>
<html>
    <head>
         <!-- Definindo o conjunto de caracteres UTF-8 -->
        <meta charset="UTF-8">
         <!-- Título da página -->
        <title>Página Inicial</title>
    </head>
    <body>
        <!-- Título principal da página -->
        <h1>Tela de Login do Sistema</h1>
        <!-- Formulário de login -->
        <form action="menu.php" method="POST">
            <fieldset><!-- Início do campo de grupo -->
                <legend>Dados do Usuário</legend>
                <!-- Tabela para organizar os campos -->
                <table>
                    <tbody><!-- Início do corpo da tabela -->
                        <!-- Verifica se a variável de sessão 'msg' está definida-->
                        <?php if (isset($_SESSION['msg'])) {?>
                            <tr><td colspan="2" style="color: red;">
                                    <?php echo '$_SESSION'['msg']; ?></<td></tr>
                                    <?php
                                        session_destroy()
                                    }?>
                        <tr>
                            <!-- Cabeçalho do campo -->
                            <td>Usuário</td>
                            <!-- Campo de entrada para o nome de usuário -->
                            <td><input type="text" name="usuario"/></td>
                        </tr>
                        <tr>
                            <!-- Cabeçalho do campo -->
                            <td>Senha</td>
                            <!-- Campo de entrada para a senha -->
                            <td><input type="password" name="senha"/></td>
                        </tr>
                        <tr>
                            <!-- Coluna que se estende por duas colunas -->
                            <!-- COLSPAN Início da célula de botão -->
                            <!-- INPUT... Botão de envio do formulário e TD  Fim da célula de botão -->
                            <td colspan="2"><input type="submit" value="Entrar"/></td>
                        </tr>
                    </tbody><!-- Fim do corpo da tabela -->
                </table> <!-- Fim da tabela -->
            </fieldset><!-- Fim do campo de grupo -->
        </form> <!-- Fim do formulário -->
    </body>
</html>
