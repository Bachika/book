<?php
    $server = "localhost";
    $user = "gau";
    $password = "gau123";
    $dbname = "book";

    $connection = mysqli_connect($server, $user, $password, $dbname);
    if(!$connection){
        die("connection Error!!!");
    }
?>  