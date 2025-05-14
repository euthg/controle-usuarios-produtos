<?php
    session_start();
    if($_SESSION['tipo_usuario'] != 1){
        header("location: index.php");
    }
    include("php/funcoes.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="cssLogin/styleTabelaUsuario.css">
</head>
<body>
    <p>
        <a href="menu.php">Voltar</a>
        <?php if($_SESSION['tipo_usuario'] == 1){?>
    
        <a href="cadastrarNovoUsuario.php">Cadastrar Novo Usuário</a>
        <?php }?>
    </p>
   
    <div class="container">
    <div class="titulo">Lista de Usuários</div>
</div>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Tipo de Usuário</td>
        <td>Login</td>
        <td>Senha</td>
        <td>Data de Nascimento</td>
        <td>Foto</td>
        <td>Ativo</td>
        <td>Ações</td>
    </tr>
    <?php echo listaUsuarios() ?>
</table>


</body>
</html>