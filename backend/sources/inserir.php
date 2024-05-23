<?php
    include_once("conexao.php");

    $email = $_POST["email"];
    $senha = MD5($_POST["senha"]);

    $sqlVerification = $conn -> prepare("SELECT pk_usuario, email_usuario, senha_usuario, eh_adm_usuario FROM usuario WHERE email_usuario = ?");

    $sqlVerification -> execute([$email]);

    if($sqlVerification -> rowCount() == 0){
        $sql = $conn -> prepare("INSERT INTO usuario (email_usuario, senha_usuario) VALUES (?,?)");
        $sql -> execute([$email, $senha]);

        header("location:../users_pages/cadastro.php");
    }else{
        echo("<script>alert('O e-mail informado já está cadastrado!')</script>");
    }

    unset($sqlVerification);
    unset($sql);
    unset($conn);
?>