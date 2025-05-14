<?php
 

$desc = $_POST['nDesc'];
$quant = $_POST['nQuant'];
$unit = $_POST['nUnit'];
//$ativo = $_POST("nAtivo");
$opcao = $_GET['opcao'];
$id = $_GET['id'];

if($_POST['nAtivo'] == "on"){
    $ativo = 'S';
}else{
    $ativo = 'N';
}
include("conexao.php");

if($opcao == 'I'){
    $sql = "INSERT INTO produto (descricao, quantidade, valor_unitario, flg_ativos)
        VALUES('$desc','$quant','$unit','$ativo');";
}elseif($opcao == 'A'){
                            $sql = "UPDATE produto
                            SET descricao = '$desc',
	                        quantidade = $quant,
                            valor_unitario = $unit,
                            flg_ativos = '$ativo'
                            WHERE id_produto = $id;";
}elseif($opcao == 'E'){
    $sql = "DELETE FROM produto WHERE id_produto = $id;";
}



$result = mysqli_query($conn,$sql);
mysqli_close($conn);

header("location: ../produtos.php");

?>