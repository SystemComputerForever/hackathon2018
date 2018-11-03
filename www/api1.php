<?php
    echo 'Hello, World!';
    // Create the PDO object for CloudSQL MySQL.
    $dsn = getenv('MYSQL_DSN');
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    // $dsn = 'mysql:unix_socket=/cloudsql/hackathon-718718:asia-east1:travel718718;dbname=travel';
    // $user = 'root';
    // $password = 'root';
    $pdo = new PDO($dsn, $user, $password);
    
    // Create the database if it doesn't exist
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    $select = $pdo->prepare('select * from country');
    $select->execute();
    var_dump($select);
?>