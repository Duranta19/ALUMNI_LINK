<?php
    $conn = mysqli_connect('localhost', 'team4errors', 'team4errors', 'alumni_linked');
    if(!$conn){
        echo "Connection error" . mysqli_connect_error();
    }
    // else{
    //     echo "connected";
    // }
?>