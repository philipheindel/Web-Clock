<?php
    function connect($initSQL){
        mysql_connect("localhost", "temp", "temp");
        mysql_select_db("temp");
        
        $result = mysql_query($initSQL);
        
        return $result;
    }
    
    function updateDB($initSQL)
    {
       $result = mysql_query($initSQL);
        
    
        return $result;    
    }

?>