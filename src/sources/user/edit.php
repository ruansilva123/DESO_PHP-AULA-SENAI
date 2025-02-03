<?php
    include_once("../global/connection.php");

    $email = $_POST["email"];
    $password = $_POST["password"];
    $pk_user = $_GET["user"];

    $sql = $conn -> prepare("UPDATE user SET user_email = ?, password_user = ? WHERE pk_user =?;");
    $sql -> execute([$email, $password, $pk_user]);

    unset($sql);
    unset($conn);
    header("location:../pages/home.php");
?>