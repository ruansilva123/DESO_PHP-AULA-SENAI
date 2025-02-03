<?php
    include_once("../global/connection.php");

    $pk_user = $_GET["user"];
    $sql = $conn -> prepare("DELETE FROM user WHERE pk_user = ?;");

    $sql -> execute([$pk_user]);

    unset($sql);
    unset($conn);

    header("location: ../pages/home.php");
?>