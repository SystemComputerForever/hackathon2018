<?php
    try{
        extract($_GET);
        require_once('../conn.php');
        $select = $pdo->prepare('select * from city where country_id = :cid;');
        $select->bindParam(':cid',$cid);
        $select->execute();
        $jr = array();
        $result = $select->fetchAll(PDO::FETCH_BOTH);
        if(isset($result[0]['city_id'])){
            foreach($result as $row){
                $temp = array('city_id'=>$row['country_id'], 'city'=>$row['name']);
                array_push($jr, $temp);
            }
        }else{
            array_push($jr, array("status"=>"no"));
        }


        echo json_encode($jr);
    } catch(Exception $e){
        die($e->getMessage());
    }
    
?>