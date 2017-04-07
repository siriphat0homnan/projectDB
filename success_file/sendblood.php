<?php
    $hos = $_POST['hospital'];
    $blood = $_POST['blood'];
    $num = $_POST['num_blood'];

    
    include 'connect.php';
    $conn->close();


    echo $hos."<br>".$blood."<br>".$num;

?>