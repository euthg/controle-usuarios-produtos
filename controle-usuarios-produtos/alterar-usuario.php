

<?php
include("php/funcoes.php");
//busca os dados do susario do ID recebido do GET
$usuario = buscaUsuarioId($_GET['id']);

$flagAtivos = '';
if ($usuario['flg_ativos'] == 'S'){
    $flagAtivos = 'checked';
}

?>
<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
    <link rel="stylesheet" href="csslogin/styleAltUsuario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="php/salva-usuario.php?opcao=A&id=<?php  echo $_GET['id'];?>" enctype="multipart/form-data" id="formCadastro" onsubmit="return validarCadastro()">
                    <h2>Alterar Usuário</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" value="<?php echo $usuario['nome'];?>" id="nome" name="nNome" required>
                        <label for="nome">Nome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" value="<?php echo $usuario['login'];?>" id="email" name="nEmail" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="inputbox">
                        <label for="iDataN"></label>
                        <input type="Date" id="iDataN" name="nDataN">
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="senha" name="nSenha">
                        <label for="senha">Senha</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-open-outline"></ion-icon>
                        <input type="password" value="" id="confirmSenha" name="nConfirmSenha">
                        <label for="confirmSenha">Confirmar Senha</label>
                    </div>
                    <div class="inputbox">
                        <input type="file" id="ifoto" name="nFoto" accept="imagem/">
                    </div>
                    <div class="forget">
                        <label><input type="checkbox" id="iAtivo" name="nAtivo" <?php echo $flagAtivos;?>>Ativo</label>
                        <label for="iTipo">Tipo de Usuário:</label>
                         <select name="nTipo" id="iTipo" required>
                            <?php echo optionTipoUsuarioId($usuario['id_tipo_usuario']);?>
                            <?php echo optionTipoUsuario($usuario['id_tipo_usuario']);?>
                        </select> 
                    </div>
                    <button type="submit">Alterar</button>
                    <button type="button" onclick="limparFormulario()">Reverter</button>
                    <div class="registrar">
                        <p><a href="usuarios.php">Voltar</a></p>
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
