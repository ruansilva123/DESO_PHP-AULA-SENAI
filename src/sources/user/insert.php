<?php
    include_once("../global/connection.php");

    $email = $_POST["email"];
    $password = MD5($_POST["password_user"]);

    $sqlVerification = $conn -> prepare("SELECT pk_user, user_email, password_user, is_admin FROM user WHERE user_email = ?");

    $sqlVerification -> execute([$email]);

    if($sqlVerification -> rowCount() == 0){
        $sql = $conn -> prepare("INSERT INTO user (user_email, password_user) VALUES (?,?)");
        $sql -> execute([$email, $password]);

        header("location:../pages/cadastro.php");
    }else{
        echo("<script>alert('The email provided is already registered!')</script>");
    }

    unset($sqlVerification);
    unset($sql);
    unset($conn);
?>