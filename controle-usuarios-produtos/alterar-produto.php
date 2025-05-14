<?php
include("php/funcoes.php");
//busca os dados do usuario do ID recebido do GET
$produto = buscaProdutoId($_GET['id']);

$flagAtivos = '';
if ($produto['flg_ativos'] == 'S'){
    $flagAtivos = 'checked';
}
?>
<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
    <link rel="stylesheet" href="csslogin/styleCadastroProduto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="php/salva-produto.php?opcao=A&id=<?php echo $_GET['id'];?>" id="formCadastro">
                    <h2>Alterar Produto</h2>
                    <div class="inputbox">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <input type="text" value="<?php echo $produto['descricao'];?>" id="iDesc" maxlength="80" name="nDesc" required>
                        <label for="desc">Descrição</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                        <input type="text" value="<?php echo $produto['quantidade'];?>" id="iQuant" name="nQuant" maxlength="60" required>
                        <label for="quant">Quantidade</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="cash-outline"></ion-icon>
                        <input type="text" value="<?php echo $produto['valor_unitario'];?>" id="iUnit" name="nUnit" required>
                        <label for="unit">Valor Unitário</label>
                    </div>
                    <div class="forget">
                        <label><input type="checkbox" id="nAtivo" name="nAtivo" <?php echo $flagAtivos; ?>> Ativo</label>
                    </div>
                    <button type="submit">Alterar</button>
                    <button type="button" onclick="limparFormulario()" style="margin-top: 10px;">Reverter</button>
                    <div class="registrar">
                        <p><a href="produtos.php">Voltar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        function limparFormulario() {
            document.getElementById('formCadastro').reset();
        }
    </script>
</body>
</html>
