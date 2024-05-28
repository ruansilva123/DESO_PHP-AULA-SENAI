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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/style/styles.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid justify-content-start">
            <button class="btn btn-outline-success me-2" type="button"><a href="login.php" style="text-decoration:none">Sair</a></button>
            <button class="btn btn-outline-success me-2" type="button"><a href="cadastro.php" style="text-decoration:none">Cadastrar usuário</a></button>
        </div>
    </nav>
    <table>
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
                        <td><a href="edicao.php?usuario='.$usuario["pk_usuario"].'">Editar</a></td>  
                    </tr>';
            }
            }
        ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>