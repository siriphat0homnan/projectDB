<?php
/**
 * @Author: sahapap
 * @Date:   2017-04-13 00:07:54
 * @Last Modified by:   sahapap
 * @Last Modified time: 2017-04-15 21:25:05
 */

session_start();

$id = $_GET['cid'];

//echo "delete".$id."complete";

include 'connect.php';

$sql = "delete from donor where cid='$id'";

//echo $sql;



if ($conn->query($sql)===TRUE){
    echo "<script>alert('delete complete');</script>";
}else{
    echo "<script>alert('delete fail');</script>";
}

?>