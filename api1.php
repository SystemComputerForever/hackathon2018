<?php
    echo 'Hello, World!';

    // create the Silex application
    $app = new Application();

    // Create the PDO object for CloudSQL MySQL.
    $dsn = getenv('MYSQL_DSN');
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $pdo = new PDO($dsn, $user, $password);

    // Create the database if it doesn't exist
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $app['pdo'] = $pdo;

    $select = $pdo->prepare('select * from country');
    $select->execute();
    var_dump($select);
?>