<?php
    $base_url = './';
    $encrypt_key = 'qzg03cZ8yWS8ky3ZVpKLPRTaMjzgYLaK';
    function encodeText($en_t){
        return htmlspecialchars($en_t);
    }
    function checkUIDDuplicate($id){
        $sql = select count(*) from user where id = $id;
        
        if()
    }
?>
