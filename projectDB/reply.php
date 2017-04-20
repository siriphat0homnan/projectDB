<?php
include('connect.php');

$bid=$_POST['bid'];
$name=$_POST['name'];
$message=$_POST['detail'];
$date_a=date("Y-m-d");

// echo $bid.$name.$message.$date_a;

$sql="INSERT into comment (bid,massage,date_time,user) values ($bid,'$message','$date_a','$name')";

 // echo "$sql";
 // if ( $conn->query($sql)===TRUE){
 //    Echo "pass";
 // }else{
 //     echo "fail";
 // }

$conn->query($sql);
$conn->close();
echo "<br><div align=center><B>ขอบคุณสำหรับความคิดเห็นค่ะ</B></div><BR>";
echo "<div ailgn=center><A HREF='ans.php?bid=$bid'>กลับไปดูกระทู้ที่คุณตอบ</A></div>";
?>