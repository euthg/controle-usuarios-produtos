<?php
session_start();
$email = $_POST["nEmail"];
$senha = $_POST["nSenha"];



//var_dump($email."".$senha);
//var_dump($_POST['login']);
    
include("conexao.php");
    
$sql = "SELECT * FROM usuario
        WHERE login = '".$email."'
        AND flg_ativos = 'S'
        AND senha = md5('".$senha."');";

//var_dump($sql);
//die();

$result = mysqli_query($conn,$sql);

mysqli_close($conn);

if(mysqli_num_rows($result) > 0) {
    foreach($result as $campo){
        $_SESSION['tipo_usuario'] = $campo['id_tipo_usuario'];
    };
    //var_dump("acesso OK");
    header("location: ../menu.php");
}else{
    var_dump("Acesso NEGADO");
}

?>