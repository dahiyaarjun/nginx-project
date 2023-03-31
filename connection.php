<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student";

    $Conn= mysqli_connect($servername,$username,$password,$dbname);

    if(!$Conn){
        echo "failed to connect";
    }
    error_reporting();
?>