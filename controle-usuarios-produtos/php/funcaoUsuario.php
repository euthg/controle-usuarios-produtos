
<?php
//Dados por id
    function buscaUsuarioId($id){
        $sql = include("conexao.php");

        $sql = "SELECT * FROM usuario WHERE id_usuario = $id;";
        
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        if (mysqli_num_rows($result) > 0){
            foreach($result as $campo){
                
            }
        }
        return $campo;
    }

    function listaUsuarios(){
        $linha = "";
        include("conexao.php");

        $sql = "SELECT * FROM usuario;";

        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        if (mysqli_num_rows($result) > 0){
            foreach($result as $campo){
                $id = $campo ['id_usuario'];
                $tipo = buscaTipoUsuarioId($campo['id_tipo_usuario']);

                $linha .=
                "<tr>
                    <td>".$campo['id_usuario']."</td>
                    <td>".$campo['nome']."</td>
                    <td>".$tipo['descricao']."</td>
                    <td>".$campo['login']."</td>
                    <td>".$campo['senha']."</td>
                    <td>".date('d/m/Y',strtotime($campo['data_nasc']))."</td>
                    <td><img src='".$campo['Foto']."' alt='Foto do usuário' width='100%'></td>
                    <td>".descrFlag($campo['flg_ativos'])."</td>
                    <td>
                        <a href='alterar-usuario.php?id=$id'> 
                        Alterar 
                    </a>
                        <a href='excluir-usuario.php?id=$id'>
                            Excluir
                        </a>
                    </td>
                </tr>";
            }
        }

        return $linha;
    }
?>