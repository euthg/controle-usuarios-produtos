

<?php
include("php/funcoes.php");
//busca os dados do susario do ID recebido do GET
$usuario = buscaUsuarioId($_GET['id']);

?>
<!DOCTYPE html>  
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir usuário</title>
    <link rel="stylesheet" href="csslogin/styleExcluir.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="POST" action="php/salva-usuario.php?opcao=E&id=<?php  echo $_GET['id'];?>" id="formCadastro">
                    <h2>Excluir usuário</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
    
                        <label for="nome" >Deseja realmente excluir o usuário <?php echo $usuario['nome']?>?</label>
                    </div>

                    <p>
                    <a href="usuarios.php">
                        <input type="button" value="Não">
                    </a>
                    <input type="submit" value="Sim">
                    </p>
                    <div class="registrar">
                        <p><a href="usuarios.php">Voltar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
