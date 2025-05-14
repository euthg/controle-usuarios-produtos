<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <!--CSS STYLES-->
    <link rel="stylesheet" href="csslogin/stylemenu.css">
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
                <?php if($_SESSION['tipo_usuario'] == 1){?>
                    <a href="usuarios.php">
                         <button type="submit">Usuários</button>
                    </a>
                <?php }?>
                    <a href="produtos.php">
                         <button type="submit">Produtos</button>
                    </a>
                
                    <a href="index.php">
                        <button type="button">Sair</button>
                    </a>
                </div>
            </div>
    </section>
    <!--Codigo em Js-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>