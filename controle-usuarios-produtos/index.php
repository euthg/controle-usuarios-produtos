<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--CSS STYLES-->
    <link rel="stylesheet" href="csslogin/styleLogin.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!--form-->
    <section>
            <div class="form-box">
                <div class="form-value">
                    <form method="POST" action="php/validacao.php">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="Email" name="nEmail" required>
                            <label for="Email">Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="nSenha" required>
                            <label for="password">Senha</label>
                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Lembrar de Mim <a style="margin-left: 10px;" href="esqueceuSenha.php">Esqueceu sua senha?</a></label>
                        </div>
                        <button>Login</button>
                        <div class="registrar">
                            <p>Não possuo uma conta: <a href="cadastrar.php">Criar conta</a></p>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!--Codigo em Js-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>