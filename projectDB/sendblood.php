<?php


    $hos = $_POST['hospital'];
    $blood = $_POST['blood_type'];
    $num = $_POST['num_blood'];

    echo "<script type='text/javascript'>alert('$hos-$blood-$num');</script>";
    // echo "<script language=\"JavaScript\">"
    // echo "alert($hos."<br>".$blood."<br>".$num)";
    // echo "</script>";

    
   include 'connect.php';

    
        $SQL = "UPDATE hospital, user SET hospital.O_vol = 1000000 WHERE (user.username = '$hos') and (user.h_name = hospital.h_name)";
        $result = mysql_query($SQL);
    
 
?>