<?php
    $base_url = './';
    $api_key = 'AIzaSyDJb1TFlcnbm0RyulhDWFB7ZZJlgCT78ak';
    $encrypt_key = 'qzg03cZ8yWS8ky3ZVpKLPRTaMjzgYLaK';
    function encodeText($en_t){
        return htmlspecialchars($en_t);
    }
    function checkUIDDuplicate($id){
        $sql = select count(*) from user where id = $id;
        
        if()
    }
?>
