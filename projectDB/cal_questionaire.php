<?php
session_start();

echo $_POST['checkbox1'];
echo $_POST['checkbox2'];
echo $_POST['checkbox31'];
echo $_POST['checkbox32'];
echo $_POST['checkbox41'];
echo $_POST['checkbox42'];

$_SESSION['result'] = true;

if ($_POST['checkbox1'] != "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox2'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox31'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox32'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox41'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox42'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox5'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox6'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox7'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox8'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox9'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox10'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox11'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox12'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox13'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox14'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox151'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox152'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox16'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox17'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox18'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox19'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox20'] == "yes") {
    $_SESSION['result'] = false;
} else if ($_POST['checkbox21'] == "yes") {
    $_SESSION['result'] = false;
} 

header('location:result_questionaire.php');
    ?>