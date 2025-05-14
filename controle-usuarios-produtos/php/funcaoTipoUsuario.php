<?php
function optionTipoUsuario($id){
    $lista = '';

    $sql = include("conexao.php");

    $sql = "SELECT * FROM tipo_usuario 
            WHERE flg_ativos = 'S' 
            AND id_tipo_usuario <> $id;";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0){
        foreach($result as $campo){
            $lista .= '<option value="'.$campo['id_tipo_usuario'].'">'.$campo['descricao'].'</option>';
        }
    }


    return $lista;
}

function optionTipoUsuarioId($id){
    $lista = '';

    $sql = include("conexao.php");

    $sql = "SELECT * FROM tipo_usuario 
            WHERE id_tipo_usuario = '$id';";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0){
        foreach($result as $campo){
            $lista = '<option value="'.$campo['id_tipo_usuario'].'">'.$campo['descricao'].'</option>';
        }
    }


    return $lista;
}

function buscaTipoUsuarioId($id){
    $sql = include("conexao.php");

    $sql = "SELECT descricao 
    FROM tipo_usuario 
    WHERE id_tipo_usuario = $id;";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if (mysqli_num_rows($result) > 0){
        foreach($result as $campo){
            
        }
    }
    return $campo;
}

?>