<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration_form";

    $connection = mysqli_connect($servername,$username,$password,$dbname);
    if($connection)
    {
        // echo "connected";
    }
    else
    {
        echo "there is an error try again ";
    }
?>