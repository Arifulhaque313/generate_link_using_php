<?php
    $db = mysqli_connect("localhost:3306","root","password","generate_link");
    if(mysqli_connect_error()){
        die ("DB Connection Failed ");
    }
    // else{
    //     echo"connected";
    // }
?>