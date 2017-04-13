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


//$SQL = 'update hospital, user set '.$blood.'='.$blood.'+'.$num. ' where username = '.$hos.' and user.h_name = hospital.h_name';
$SQL1 = "update hospital, user set $blood = $blood - $num where (username = '$user') and (user.h_name = hospital.h_name)";
echo $SQL1."<br>";

$SQL = "update hospital, user set $blood = $blood + $num where (username = '$hos') and (user.h_name = hospital.h_name)";
echo $SQL."<br>";
/*if ($conn->query($SQL)=== TRUE){
    echo "update complete\n";
}else{
    echo "Update fail";
}*/



// if ($conn->query($SQL)=== TRUE){
//     echo "update 1 complete";
// }else{
//     echo "Update 1s fail";
// }

if ($conn->query($SQL1)=== TRUE){
    echo "update 1 complete";
}else{
    echo "Update 1s fail";
}

if ( strcmp($blood,"A_vol")==0 ){
    $b = "A";
}

if ( strcmp($blood,"B_vol")==0 ){
    $b = "B";
}

if ( strcmp($blood,"O_vol")==0 ){
    $b = "O";
}

if ( strcmp($blood,"AB_vol")==0 ){
    $b = "AB";
}

if ( strcmp($blood,"A_neg_vol")==0 ){
    $b = "A-";
}

if ( strcmp($blood,"B_neg_vol")==0 ){
    $b = "B-";
}

if ( strcmp($blood,"O_neg_vol")==0 ){
    $b = "O-";
}

if ( strcmp($blood,"AB_neg_vol")==0 ){
    $b = "AB-";
}


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
?>