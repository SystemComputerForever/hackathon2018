<?php
    $base_url = './';
    $e_key = 'qzg03cZ8yWS8ky3ZVpKLPRTaMjzgYLaK';
    function encodeText($en_t){
        return htmlspecialchars($en_t);
    }
    function checkUIDDuplicate($id,$conn){
        $select = $conn->query("select count(*) from user where u_id = '$id';");
        return $select->fetch()['count(*)'];
        
    }
    function getNumofUser($conn){
        $select = $conn->query('select count(*) from user;');
        return $select->fetch()['count(*)'];
    }
?>
