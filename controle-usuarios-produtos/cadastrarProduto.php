<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="csslogin/styleCadastroProduto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="php/salva-produto.php?opcao=I" id="formCadastro">
                    <h2>Cadastrar Produto</h2>
                    <div class="inputbox">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <input type="text"  id="iDesc" maxlength="80" name="nDesc" required>
                        <label for="desc">Descrição</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                        <input type="text" id="iQuant" name="nQuant" maxlength="60" required>
                        <label for="quant">Quantidade</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="cash-outline"></ion-icon>
                        <input type="text" id="iUnit" name="nUnit" required>
                        <label for="senha">Valor Unitário</label>
                    </div>
                    <div class="forget">
                        <label><input type="checkbox" id="nAtivo" name="nAtivo" >Ativo</label>
                    </div>
                    <button type="submit">Cadastrar</button>
                    <button type="button" onclick="limparFormulario()">Limpar</button>
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
