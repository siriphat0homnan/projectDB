<?php
/**
 * @Author: sahapap
 * @Date:   2017-04-12 22:16:07
 * @Last Modified by:   sahapap
 * @Last Modified time: 2017-04-13 22:30:44
 */
session_start();

//echo $_SESSION['ID'];

//$title = $_POST['title'];
$first = $_POST['Sname'];
$last = $_POST['Lname'];
//$birth = $_POST['bday'];
$cid = $_POST['Sid'];
$address = $_POST['address'];
$htel = $_POST['htel'];
//$blood = $_POST['blood'];
$job = $_POST['job'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$disease = $_POST['disease'];

//echo $first." ".$last." ".$cid."<br>";
//echo $birth."<br>";
/*echo $address."<br>";
echo $htel."<br>";
echo $tel."<br>";
echo $job."<br>";
*///echo $blood."<br>";
/*echo $mail."<br>";
echo $disease."<br>";
*/
if ( strcmp($job,"student")==0 ) {
    $carrer = "นักเรียน/นักศึกษา";
}

if ( strcmp($job,"police")==0 ) {
    $carrer = "ข้าราชการ,ทหาร,ตำรวจ,พนักงานรัฐวิสาหกิจ";
}

if ( strcmp($job,"employee")==0 ) {
    $carrer = "พนักงานบริษัท,พนักงานรับจ้าง";
}

if ( strcmp($job,"monk")==0 ) {
    $carrer = "พระภิกษุ,สามเณร";
}

if ( strcmp($job,"sale")==0 ) {
    $carrer = "ค้าขาย";
}

if ( strcmp($job,"etc")==0 ) {
    $carrer = "อื่นๆ";
}

if ( $disease == '-' ){
    $disease = "ไม่มี";
}

include 'connect.php';

$sql =  "update donor set f_name='$first', l_name='$last', address='$address', job='$carrer', email='$mail', disease='$disease' where cid='$cid'";

//echo "\n".$sql;

if ($conn->query($sql)=== TRUE){
    //echo "\n update Complete";
    
    $d = "delete from donor_tel where cid='$cid'";

    //echo "\n".$d."\n";

    if ( $conn->query($d)===TRUE ) {
        //echo "delete tel complete";
    }else{
        //echo "delete fail";
    }

    if ( strcmp($tel,"-")!=0 ){
        $sql = "insert into donor_tel values ('$cid','$tel')";
        $conn->query($sql);
    }


    if ( strcmp($htel,"-")!=0 ){
        $sql = "insert into donor_tel values ('$cid','$htel')";
        $conn->query($sql);
    }

    echo "<script>alert('แก้ไขข้อมูลได้เวร็จสิ้นแล้ว');</script>";
    echo "<center><h2><a href='search.php'>กลับสู่หน้าหลัก</a></h2></center>";

}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
    echo "<center><h2><a href='search.php'>กลับสู่หน้าหลัก</a></h2></center>";
}





$conn->close();

?>