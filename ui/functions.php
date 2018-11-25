<?php
    
    function db_connect()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'products';

        $connect = mysql_connect($host,$user,$password);
        if(!conenct || !mysql_select_db($db,$connect)){
            return false;
        }
        return $connect;
    }
    if (db_connect()){
        echo 'ok';
    }
?>