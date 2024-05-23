<?php
    session_start();
    if(!$_SESSION["loggedin"]){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div>
        <label><a href="login.php">Sair</a></label>
        <label><a href="cadastro.php">Cadastrar usuário</a></label>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">E-mail</th>
            <th scope="col">Administrador</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
            include_once("../sources/listar.php");
            if(!empty($usuarios)){
            foreach($usuarios as $usuario){
                echo ' <tr>
                        <td>' . $usuario["pk_usuario"] . '</td>
                        <td>' . $usuario["email_usuario"] . '</td>
                        <td>' . $usuario["eh_adm_usuario"] . '</td>
                        <td><a href="../sources/excluir.php?usuario='.$usuario["pk_usuario"].'">Excluir</a></td>  
                        <td><a href=" ">Editar</a></td>  
                    </tr>';
            }
            }
        ?>
        </tbody>
    </table>
</body>
</html>