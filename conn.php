<?php
    // $dsn = getenv('MYSQL_DSN');
    // $user = getenv('MYSQL_USER');
    // $password = getenv('MYSQL_PASSWORD');
    //for local
    $dsn = 'mysql:host=127.0.0.1;port=3307;dbname=travel;charset=utf8';
    $user = 'root';
    $password = 'root';

    $pdo = new PDO($dsn, $user, $password);
    // $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // date_default_timezone_set('Asia/Hong_Kong');
    echo function_exists(date_default_timezone_set);
    // echo date('Y-m-d h:i:s a', time());
?>