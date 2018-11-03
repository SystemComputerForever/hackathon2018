<?php
    $server_name = "35.229.233.109/hackathon-718718:asia-east1:travel718718";
    $user_name = "root";
    $pwd = "";
    $db = "travel";
    $conn = mysqli_connect($server_name,$user_name,$pwd,$db);
    mysqli_set_charset($conn,'utf8');

    
    
    $socket = '/cloudsql/hackathon-718718:asia-east1:travel718718';
    
    date_default_timezone_set('Asia/Hong_Kong');
?>