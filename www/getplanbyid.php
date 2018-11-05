<?php
    try{
        extract($_GET);
        require_once('../conn.php');
        include('./init.php');

        $select = $pdo->prepare('select * from plan where plan_id = :pid;');
        $select->bindParam(':pid',$plan_id);
        $select->execute();
        $result = $select->fetchAll(PDO::FETCH_BOTH);
        $jr = array();
        if(isset($result[0]['title'])){
            foreach($result as $row){
                $temp = array('plan_id'=>$row['plan_id'], 'title'=>$row['title'], 'country_id'=>$row['country_id'], 'routes'=>$row['routes'], 'est_days'=>$row['est_days'], 'start_date'=>$row['start_date'], 'end_date'=>$row['end_date'], 'requirements'=>$row['requirements'], 'images'=>$row['images']);
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