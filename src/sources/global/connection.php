<?php
    date_default_timezone_set('America/Sao_Paulo');
    try{
        $conn = new PDO("mysql:dbname=php_class;host=localhost;charset=utf8","root","");
    }
    catch(PDOException $error)
    {
        echo("ERROR TO CONNECT: <br>".$error->getMessage());
    }
?>