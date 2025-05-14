<?php
    include("php/funcoes.php")
?>
<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="csslogin/styleCadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="php/salva-usuario2.php?opcao=I&id=0" enctype="multipart/form-data" id="formCadastro" onsubmit="return validarCadastro()">
                    <h2>Criar Conta</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text"  id="nome" maxlength="80" name="nNome" required>
                        <label for="nome">Nome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email" name="nEmail" maxlength="60" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <label for="iDataN" ></label>
                        <input type="Date" id="iDataN" name="nDataN">
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="senha" name="nSenha" required>
                        <label for="senha">Senha</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-open-outline"></ion-icon>
                        <input type="password" id="confirmSenha" name="nConfirmSenha" required>
                        <label for="confirmSenha">Confirmar Senha</label>
                    </div>
                    <div class="inputbox">
                        <input type="file" id="ifoto" name="nFoto" accept="imagem/">
                    </div>
                    <div class="forget">
                        <label><input type="checkbox" id="nAtivo" name="nAtivo" >Ativo</label>
                        <label style="margin-left: 25px;" for="iTipo">Tipo de Usuário:</label>
                         <select name="nTipo" id="iTipo" required>
                            <option>Selecione...</option>
                            <?php echo optionTipoUsuario(0);?>
                        </select> 
                    </div>
                    <button type="submit">Cadastrar</button>
                    <button type="button" onclick="limparFormulario()">Limpar</button>
                    <div class="registrar">
                        <p>Já possui uma conta? <a href="index.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function validarCadastro() {
            const senha = document.getElementById('senha').value;
            const confirmSenha = document.getElementById('confirmSenha').value;
            
            if (senha !== confirmSenha) {
                alert('As senhas não coincidem!');
                return false;
            }
            return true;
        }

        function limparFormulario() {
            document.getElementById('formCadastro').reset();
        }
    </script>
</body>
</html>
