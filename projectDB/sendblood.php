<?php
session_start();
$user = $_SESSION['U'];

$hos = $_POST['hospital'];
$blood = $_POST['blood_type'];
$num = $_POST['num_blood'];
$d = date("Y-m-d");

echo "<script type='text/javascript'>alert('$hos-$blood-$num');</script>";
echo $hos."<br>".$blood."<br>".$num;
echo "<br>".$user."<br>".date("Y-m-d")."<br>";
    // echo "<script language=\"JavaScript\">"
    // echo "alert($hos."<br>".$blood."<br>".$num)";
    // echo "</script>";

//echo strlen($hos)."<br>";


include 'connect.php';

$input_blood = $num;
$contain_blood = "SELECT $blood from hospital inner join user on (user.h_name = hospital.h_name) where (username = '$user') ";
$contain = $conn->query($contain_blood);
$row = $contain->fetch_assoc();
echo $input_blood.' '.$row[$blood]."<br>";

if ($input_blood <= $row[$blood]) {

    $SQL1 = "UPDATE hospital, user set $blood = $blood - $num where (username = '$user') and (user.h_name = hospital.h_name)";
    echo $SQL1."<br>";

    $SQL2 = "UPDATE hospital, user set $blood = $blood + $num where (username = '$hos') and (user.h_name = hospital.h_name)";
    echo $SQL2."<br>";

    if ($conn->query($SQL1)=== TRUE){
        echo "update 1 complete";
    }else{
        echo "Update 1s fail";
    }
    echo "<br>";
    
    if ($conn->query($SQL2)=== TRUE){
        echo "update 1 complete";
    }else{
        echo "Update 1s fail";
    }
    echo "<br>";
    
    if (strcmp($blood,"A_vol")==0 ){$b = "A";}

    if (strcmp($blood,"B_vol")==0 ){$b = "B";}

    if (strcmp($blood,"O_vol")==0 ){$b = "O";}

    if (strcmp($blood,"AB_vol")==0 ){$b = "AB";}

    if (strcmp($blood,"A_neg_vol")==0 ){$b = "A-";}

    if ( strcmp($blood,"B_neg_vol")==0 ){$b = "B-";}

    if ( strcmp($blood,"O_neg_vol")==0 ){$b = "O-";}

    if ( strcmp($blood,"AB_neg_vol")==0 ){$b = "AB-";}

    $u = "select h_name from user where username='$user'";

    $result = $conn->query($u);
    $row = $result->fetch_assoc();
    $ans_u= $row['h_name']; 

    echo $ans_u;

    $u = "select h_name from user where username='$hos'";

    $result = $conn->query($u);
    $row = $result->fetch_assoc();
    $ans_h= $row['h_name']; 
    echo $ans_h;

    $sql = "insert into transfer values ('$ans_u','$ans_h','$d','$b',$num)";

    echo $sql."<br>";
    if ($conn->query($sql)=== TRUE){
        echo "update 2 complete\n";
    }else{
        echo "Update 2 fail";
    }
}else{
    echo "ERROR";
}
sleep(0.5);
header('location: http://localhost/projectDB/projectDB/HostAdmin.php');
exit;
?>