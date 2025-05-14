<?php

$nome = $_POST['nNome'];
$tipo = $_POST['nTipo'];
$email = $_POST['nEmail'];
$senha = $_POST['nSenha'];
$nasc = $_POST['nDataN'];
$opcao = $_GET['opcao'];
$id = $_GET['id'];
$setSenha = '';

include("funcoes.php");

if ($senha != ''){
    $setSenha = "senha = md5('$senha'),";
}

if($_POST['nAtivo'] == "on"){
    $ativo = 'S';
}else{
    $ativo = 'N';
}
include("conexao.php");

if($opcao == 'I'){
    $id = proximoID('usuario','id_usuario');
    $sql = "INSERT INTO usuario (id_usuario,id_tipo_usuario,nome,login,senha,data_nasc,flg_ativos)
            VALUES($id,$tipo,'$nome','$email',md5('$senha'),'$nasc','$ativo');";

}elseif($opcao == 'A'){
                            $sql = "UPDATE usuario 
                            SET nome = '$nome',
	                        login = '$email',
                            $setSenha
                            data_nasc = '$nasc',
                            flg_ativos = '$ativo',
                            id_tipo_usuario = $tipo
                            WHERE id_usuario = $id;";
}elseif($opcao == 'E'){
    $sql = "DELETE FROM usuario WHERE id_usuario = $id;";
}

$result = mysqli_query($conn,$sql);
mysqli_close($conn);

//IMAGEM
if($_FILES['nFoto']['tmp_name'] != ""){
    //Grava a extensão do arquivo
    $extensao = pathinfo ($_FILES['nFoto']['name'], PATHINFO_EXTENSION);

    //novo nome 
    $novoNome = md5($_FILES['nFoto']['name']).'.'.$extensao;

    if(is_dir('../img')){
        $diretorio = '../img/';
    }else{
        $diretorio = mkdir('../img/');
    }

    move_uploaded_file($_FILES['nFoto']['tmp_name'], $diretorio.$novoNome);

    $dirImagem = 'img/'.$novoNome;
    
    include("conexao.php");
    $sql = "UPDATE usuario
     SET foto = '".$dirImagem."'
     WHERE id_usuario = $id;";

     $result = mysqli_query($conn, $sql);
     mysqli_close($conn);
}


header("location: ../index.php");

?>