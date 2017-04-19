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
    echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
    echo "<center><h2><a href='HostAdmin.php'>กลับสู่หน้าหลัก</a></h2></center>";
}else{
    
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
    echo "<center><h2><a href='HostAdmin.php'>กลับสู่หน้าหลัก</a></h2></center>";
}

$conn->close();

?>