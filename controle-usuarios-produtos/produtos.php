<?php
    session_start();
    include("php/funcoes.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="csslogin/styleTabelaProduto.css">
</head>
<body>
    <p>
        <a href="menu.php">Voltar</a>  
        <?php if($_SESSION['tipo_usuario'] == 1){?>
        <a href="cadastrarProduto.php">Cadastrar novo produto</a>
        <?php }?>
    </p>
    <div class="container">
    <div class="titulo">Lista de Produtos</div>
</div>
    <table border="1">

        <tr>
            <td>ID</td>
            <td>Descrição</td>
            <td>Quantidade</td>
            <td>Valor Unitário</td>
            <td>Ativo</td>
            <td>Ações</td>
        </tr>

        <?php echo listaProdutos();?>

    </table>
</body>
</html>