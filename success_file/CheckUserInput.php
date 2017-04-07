<?php
session_start();

echo $_SESSION['U'];

if ($_SESSION['U'] == "hospital") {
                    # code...
  header('location:admin.php');
}

if ($_SESSION['U'] == "admin"){
  header('location:HostAdmin.php');
}
?>