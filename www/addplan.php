<?php
    try{
        extract($_GET);
        require_once('../conn.php');
        include('./init.php');

        //generate plan id
        do{
            $plan_id = "plan".date('Ym');
            for($i=0;$i<10;$i++){
                $plan_id.=rand(0,9);
            }
        }while(checkIDDuplicate($plan_id,"plan","plan_id",$pdo) > 0);
        //image handle
        //p.s.
        //route is json--> [{"1":"sth"},{"2":"sth"},{"3":"sth"}]
        //datetime format--> '2018-10-11 9:40'
        //image format --> {"images":["1","2","3"]}

        //test variables
        $title = "test 1";
        $country = "86";
        $routes = '[{"1":"sth"},{"2":"sth"},{"3":"sth"}]';
        $est_days = 3;
        $start_date = '2018-11-11 9:40';
        $end_date = "2018-11-13 20:40";
        $requirements = "tes\"t p'lan 1";
        $images = '{"images":["1","2","3"]}';


        $data = [$plan_id, $title, $country,$routes,$est_days,$start_date, $end_date, $requirements, $images];
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