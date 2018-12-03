<?php
    function connect($initSQL){
        mysql_connect("localhost", "temp", "temp");
        mysql_select_db("temp");
        
        $result = mysql_query($initSQL);
        
        return $result;
    }
    
    function updateDB($initSQL)
    {
        $con = new mysqli("localhost","temp","temp");
        if($con->connect_error)
        {
            die("connection failed: " . $con->connect_error);
        }
        
        if($con->query($initSQL) === TRUE)
        {
            
        }
        
        $con->close();
        
    }

?>