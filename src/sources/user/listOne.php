<?php
    include_once("../sources/global/connection.php");

    $pk_user = $_GET["user"];
    
    $sql = $conn -> prepare("SELECT pk_user, user_email, is_admin FROM user WHERE pk_user = ?;");

    $sql -> execute([$pk_user]);

    if($sql -> rowCount()>= 1){
        $user = $sql -> fetch();
    }else{
        echo("No users found!");
    }

    unset($sql);
    unset($conn);
?>