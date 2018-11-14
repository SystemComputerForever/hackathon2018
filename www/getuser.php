<?php
    try{
        extract($_GET);
        require_once('../conn.php');
        include('./init.php');
        //test variables
        $u_id = '20181100000000000012';

        
        //count comment level
        $select = $pdo->prepare('select u_id, user_name, last_name, first_name, cou.country as country, ci.name as city from country as cou, city as ci, user as u where u.u_id = :uid and u.country_id = cou.country.id and u.city_id = ci.city_id;');
        $select->bindParam(':uid',$u_id);
        $select->execute();
        $result = $select->fetchAll(PDO::FETCH_BOTH);
        $jr = array();
        if(isset($result[0]['title'])){
            foreach($result as $row){
                $temp = array('u_id'=>$row['u_id'], 'uname'=>$row['user_name'], 'country'=>$row['country'], 'city'=>$row['city'], 'fname'=>$row['first_name'], 'lname'=>$row['last_name']);
                array_push($jr, $temp);
            }
        }else{
            array_push($jr, array("status"=>"no"));
        }
        $select->closeCursor();
        //count hold
        $select = $pdo->prepare('select count(*) as posts from applications as a, user as u where a.participant_id = u.u_id and a.holder = 1 and u.u_id = :uid;');
        $select->bindParam(':uid',$u_id);
        $select->execute();
        $result2 = $select->fetchAll(PDO::FETCH_BOTH);
        $post = $result2[0]['posts']; //???plz test

        //count join
        $select = $pdo->prepare('select count(*) as join from applications as a, user as u where a.participant_id = u.u_id and a.holder = 0 and a.acceptable = 1 and u.u_id = :uid;');
        $select->bindParam(':uid',$u_id);
        $select->execute();
        $result3 = $select->fetchAll(PDO::FETCH_BOTH);
        $join = $result2[0]['join']; //???plz test

        //count comment
        $select = $pdo->prepare('select count(*) as comment from comment as c where c.target_uid = :uid;');
        $select->bindParam(':uid',$u_id);
        $select->execute();
        $result4 = $select->fetchAll(PDO::FETCH_BOTH);
        $join = $result2[0]['comment']; //???plz test

        //count comment level
        countCommentLevel($u_id, $pdo);

        echo json_encode($jr);

    } catch(Exception $e){
        die($e->getMessage());
    }

?>