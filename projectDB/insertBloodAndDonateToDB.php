<?php
session_start();

include "connect.php";

$hname = "สภากาชาดไทย";
$sql1 = "INSERT INTO donor_donation VALUES ("สภากาชาดไทย", $cid, $age, $weight, $volblood, $count, $datetime, $ssn)";

$insert1 = $conn->query($sql1);

?>