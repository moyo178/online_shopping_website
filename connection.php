<?php
    
    $host = "localhost"; $user = "users"; $pass = "fakoo"; $dbname = "fakoo";

    $connection = mysqli_connect($host , $user , $pass , $dbname);

    if(!$connection){

        die(mysqli_errno());

    }else{

    echo "connected";

    }
?>