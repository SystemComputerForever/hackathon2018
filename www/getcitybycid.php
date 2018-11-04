<?php
    try{
        extract($_GET);
        require_once('../conn.php');
        $select = $pdo->prepare('select * from city where country_id = :cid;');
        $select->bindParam(':cid',$cid);
        $result = $select->execute();
        $jr = array();

        foreach($select->fetchAll(PDO::FETCH_BOTH) as $row){
            $temp = array('city_id'=>$row['country_id'], 'city'=>$row['name']);
            array_push($jr, $temp);
        }

        echo json_encode($jr);
    } catch(Exception $e){
        die($e->getMessage());
    }
    
?>