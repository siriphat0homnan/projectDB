<?php
    session_start();
    $w = $_GET['weight'];
    $a = $_GET['age'];
    $_SESSION['age'] = $a;
    $_SESSION['weight'] = $w;
    if ($w >= 45 && $w<=50) {
        # code...
        echo '<script>alert("ท่านสามารถบริจาคเลือดได้ประมาณ 350 +- 10% มล."); </script>';
        $_SESSION['w'] = 350.00;
    }

    if ($w > 50) {
        # code...
        echo '<script>alert("ท่านสามารถบริจาคเลือดได้ประมาณ 450 +- 10% มล."); </script>';
        $_SESSION['w'] = 450.00;
    }

    if ($w < 45){
        $_SESSION['w'] = 1;
    }

    
    header('location:success.php');
?>