<?php
    include_once("../global/connection.php");
    
    $sql = $conn -> prepare("SELECT pk_user, user_email, is_admin FROM user;");

    $sql -> execute();

    if($sql -> rowCount()>= 1){
        $users = $sql -> fetchAll();
    }else{
        echo("No users found!");
    }

    unset($sql);
    unset($conn);
?>