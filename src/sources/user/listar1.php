<?php
    include_once("conexao.php");

    $pk_usuario = $_GET["usuario"];
    
    $sql = $conn -> prepare("SELECT pk_usuario, email_usuario, eh_adm_usuario FROM usuario WHERE pk_usuario = ?;");

    $sql -> execute([$pk_usuario]);

    if($sql -> rowCount()>= 1){
        $usuario = $sql -> fetch();
    }else{
        echo("Nenhum usuário encontrado!");
    }

    unset($sql);
    unset($conn);
?>