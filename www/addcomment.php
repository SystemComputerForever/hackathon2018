<?php
    try{
        extract($_GET);
        require_once('../conn.php');
        include('./init.php');

        //generate plan id
        do{
            $comment_id = "comt".date('Ym');
            for($i=0;$i<10;$i++){
                $comment_id.=rand(0,9);
            }
        }while(checkIDDuplicate($comment_id,"comment","comment_id",$pdo) > 0);
        //image handle
        //p.s.
        //route is json--> [{"1":"sth"},{"2":"sth"},{"3":"sth"}]
        //datetime format--> '2018-10-11 9:40'
        //image format --> {"images":["1","2","3"]}

        //test variables
        $target_id = "test 1";
        $plan_id = "86";
        $from_id = '[{"1":"sth"},{"2":"sth"},{"3":"sth"}]';
        $msg = 3;
        $comment_level = '2018-11-11 9:40';



        $data = [$comment_id, $title, $country,$routes,$est_days,$start_date, $end_date, $requirements, $images];
        $insert = $pdo->prepare('insert into plan(plan_id, title, country_id, routes, est_days, start_date, end_date, requirements,images) values(?,?,?,?,?,?,?,?,?);');


        $result = array();
        // echo $insert->execute($data);
        if($insert->execute($data)){
            array_push($result,array('status'=>'ok'));
        }else{
            array_push($result,array('status'=>'no'));
        }
        echo json_encode($result);

    } catch(Exception $e){
        die($e->getMessage());
    }

?>