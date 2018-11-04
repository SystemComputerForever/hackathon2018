<?php
    require_once('../conn.php');




    $select = $pdo->query('select * from country;');
    // $select->execute();
    echo 'rows: '.$select->rowCount();
    foreach($select->fetchAll(PDO::FETCH_BOTH) as $row){
        echo $row['country'].',';
    }
    echo 'end of file';

    $select->close();
?>