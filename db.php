<?php
    $dbHost = "localhost"; //localhost
    $dbUser = "root"; //user id
    $dbPswd = ""; //user password
    $dbName = "mything_blogging";

    $conn = mysqli_connect($dbHost,$dbUser,$dbPswd,$dbName);

    if($conn) {
        $check = mysqli_select_db($conn,$dbName);
        if(!$check) {
            die("Database Error: ".mysqli_connect_error());
        }
    } else{
        die("Connection Error: ".mysqli_connect_error());
    }
?>  