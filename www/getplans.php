<?php
    try{
        extract($_GET);
        require_once('../conn.php');
        include('./init.php');

        $data = ['plan_id','title','country_id','routes','est_days','start_date','end_date','requirements','images'];

        $select = $pdo->query("select * from plan");
        $jr = array();
        if($select->rowCount() > 0){
            foreach($select->fetchAll(PDO::FETCH_BOTH) as $row){
                $temp = array();
                for($i = 0; $i < sizeof($data); $i++){
                    $temp[$data[$i]] = $row[$data[$i]];
                }
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