<?php
    include_once("../global/connection.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = $conn -> prepare("SELECT pk_user, user_email, password_user, is_admin FROM user WHERE user_email = ?");

    $sql -> execute([$email]);

    if($sql -> rowCount() == 1){
        $user = $sql -> fetch();
        if($user['password_user'] == MD5($password)){
            session_start();
            $_SESSION["is_admin"] = $user["is_admin"];
            $_SESSION["loggedin"] = true;

            header("location:../pages/home.php");
        }else{
            echo("<script>alert('Invalid email or password!')</script>");
        }
    }else{
        echo("<script>alert('Invalid email or password!')</script>");
    }
    
    unset($sql);
    unset($conn);
?>