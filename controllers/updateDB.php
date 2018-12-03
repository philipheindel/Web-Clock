<?php
    require_once("../../controllers/db_con.php");
    
    function set1()
    {
        $sql = "UPDATE `settings` SET `val`= 1 WHERE `id` = 2";
        updateDB($sql);
    }
    
    function set0()
    {
        $sql = "UPDATE `settings` SET `val`= 0 WHERE `id` = 2";
        updateDB($sql);
    }
?>