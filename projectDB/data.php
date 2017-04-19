<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die ("Connection failed: ".$conn->connect_error);
}

$conn->query("SET NAMES UTF8");

$title = $_POST['title'];
$first = $_POST['Sname'];
$last = $_POST['Lname'];
$birth = $_POST['bday'];
$cid = $_POST['Sid'];
$address = $_POST['address'];
$htel = $_POST['htel'];
$blood = $_POST['blood'];
$job = $_POST['job'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$disease = $_POST['disease'];

/*echo $title." ".$first." ".$last." ".$cid."<br>";
echo $birth."<br>";
echo $address."<br>";
echo $htel."<br>";
echo $tel."<br>";
echo $job."<br>";
echo $blood."<br>";
echo $mail."<br>";
echo $disease."<br>";*/

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

$sql = "insert into donor values ('$cid','$title','$first','$last','$blood','$birth','$address','$carrer','$mail','$disease')";

if ( $conn->query($sql)===TRUE ){
    if ( strcmp($tel,"-")!=0 ){
        $sql = "insert into donor_tel values ('$cid','$tel')";
        $conn->query($sql);
    }


    if ( strcmp($htel,"-")!=0 ){
        $sql = "insert into donor_tel values ('$cid','$htel')";
        $conn->query($sql);
        header('location:questionaire.php');
    }
    echo "insert complete";
}else{
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ');</script>";
    echo "<center><h2><a href='InputInformation.php'>กลับสู่หน้าบัทึกข้อมูล</a></h2></center>";
}



$conn->close();

header('location:inputWeight.php');

    //wait......... insert to database
?>