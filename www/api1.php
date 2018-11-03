<?php
    require_once('../conn.php');

    $select = $pdo->prepare('select * from country');
    $select->execute();
    var_dump($select);
    echo 'end of file';


?>