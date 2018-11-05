<?php
    $base_url = './';
    $e_key = 'qzg03cZ8yWS8ky3ZVpKLPRTaMjzgYLaK';
    function encodeText($en_t){
        return htmlspecialchars($en_t);
    }
    function checkIDDuplicate($id,$t_name,$field_name,$conn){
        $select = $conn->query("select count(*) from $t_name where $field_name = '$id';");
        return $select->fetch()['count(*)'];
    }
    function getNumofUser($conn){
        $select = $conn->query('select count(*) from user;');
        return $select->fetch()['count(*)'];
    }
    function getStringTime($date_time){
        return date('Y-m-d H:i:s',$date_time);
    }
    function getDateTime($string_time){
       return strtotime($str);
    }
?>
