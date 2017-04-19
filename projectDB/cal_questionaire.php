<?php
session_start();
$_SESSION["result"] = result;
$c1 = $_POST["checkbox1"];
$c2 = $_POST["checkbox2"];
$c31 = $_POST["checkbox3.1"];
$timec3 = $_POST["timec3"];
// echo $timec3;
$c32 = $_POST["checkbox3.2"];

// date_default_timezone_set("Thailand/Bangkok");
// echo "The time is " . date("h:i:sa");

$c41 = $_POST["checkbox41"];
$c42 = $_POST["checkbox42"];
$slct42 = $_POST["select"];

// echo $slct42;

$c5 = $_POST["checkbox5"];
$c6 = $_POST["checkbox6"];
$c7 = $_POST["checkbox7"];
$c8 = $_POST["checkbox8"];
$c9 = $_POST["checkbox9"];
$c10 = $_POST["checkbox10"];
$c11 = $_POST["checkbox11"];
$c12 = $_POST["checkbox12"];
$c13 = $_POST["checkbox13"];
$c14 = $_POST["checkbox14"];
$c151 = $_POST["checkbox15.1"];
$c152 = $_POST["checkbox15.2"];
$c16 = $_POST["checkbox16"];
$c17 = $_POST["checkbox17"];
$c18 = $_POST["checkbox18"];
$c19 = $_POST["checkbox19"];
$c20 = $_POST["checkbox20"];
$c21 = $_POST["checkbox21"];

$result = false;

if ($c1 != "yes") {
    $result = false;
}
if ($c2 == "yes") {
    $result = false;
}
if ($c31 == "yes"){
    $result = false;
    }
}
if ($c32 == "yes"){
    $result = false;
}
if ($c41 == "yes") {
    $result = false;
}
if ($c42 == "yes"){
    if ($slct42 < 13){
        $result = false;
    }
}
if (($c5 == "yes") || ($c6 == "yes") || ($c7 == "yes") || ($c8 == "yes") || ($c9 == "yes")) {
    $result = false;
}
if (($c10 == "yes") || ($c11 == "yes") || ($c12 == "yes") || ($c13 == "yes") || ($c14 == "yes")){
    $result = false;
}
if (($c151 == "yes") || ($c152 == "yes") || ($c16 == "yes") || ($c17 == "yes") || ($c18 == "yes") || ($c19 == "yes")){
    $result = false;
}
if (($c20 == "yes") || ($c21 == "yes")) {
    $result = false; 
}

$result = true;

if ($result == true){
    echo "true";
} else {
    echo "false";
}
header('location:result_questionaire.php');
    ?>