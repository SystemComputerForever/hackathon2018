<?php
    $server_name = "35.229.233.109";
    $user_name = "hackathon-718718:asia-east1:travel718718";
    $pwd = "";
    $db = "travel";
    $conn = mysqli_connect($server_name,$user_name,$pwd,$db);
    mysqli_set_charset($conn,'utf8');
    date_default_timezone_set('Asia/Hong_Kong');
?>