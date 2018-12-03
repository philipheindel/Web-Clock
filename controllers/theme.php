<?php
    require_once("../../controllers/db_con.php");
    $sql1 = "select * from settings WHERE id = 1";
    $sql2 = "select * from settings WHERE id = 2";
    
    $result1 = connect($sql1);
    $row1 = mysql_fetch_row($result1);
    $backlight = $row1[1];
    $forelight = $row1[2];
    $val1 = $row1[3];
    
    $result2 = connect($sql2);
    $row2 = mysql_fetch_row($result2);
    $backdark = $row2[1];
    $foredark= $row2[2];
    $val2 = $row2[3];
    //text color light theme used = #596a87
    //back color light theme used = #ffffff
    
    //text color dark theme used = #ffd9b3
    //back color dark theme used = #333333
    
    if($val2 == 1)
    {
        $back = $backlight;
        $front = $forelight;
    }
    else
    {
        $back = $backdark;
        $front = $foredark;
    }
?>