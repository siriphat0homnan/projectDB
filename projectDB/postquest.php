<?php
include('connect.php');



$topic=$_POST['topic'];
$name=$_POST['name'];
$detail=$_POST['detail'];
$date_q=date("d/m/y");
// echo "$topic $name $detail $date_q";

$sql= "INSERT INTO webboard(topic,name,detail,w_date) values ('$topic','$name','$detail','$date_q')";
// echo "$sql";
// if ( $conn->query($sql)===TRUE){
//     Echo "pass";
// }else{
//     echo "fail";
// }
$conn->query($sql);
$conn->close();

echo "<br><div align=center><B>กระทู้ของคุณ $name ถูกตั้งเรียบร้อยแล้ว</B></div><BR>";
echo "<div align=center><a href='blog.php'>กลับไปหน้ากระทู้หลัก</a></div>";
?>