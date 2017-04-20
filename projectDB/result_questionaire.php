<?php
session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title>Blood</title>
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLE CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLE CSS -->
        <link href="assets/css/style.css" rel="stylesheet" />    
        <!-- GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        <style type="text/css">
          .header{
            background-color: #f2f2f2;

            height: 30%;
            padding: 5px;
            text-align: center;
            margin: auto;
          }
          .floating-box {
            float: left;
            width: 50%;
            height: 100%;
            margin: 0px;
            border: 3px solid #F9D9D9; 
            padding-top: 2%;
            padding-left: 20%;
            background-color: #F9D9D9; 
          }

        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="jquery.min.js"></script>
        <script src="jquery.form.validator.min.js"></script>
        <script src="security.js"></script>
        <script src="file.js"></script>
        <link href="validator.css" rel="stylesheet">

        <script>
          function validateForm()
          {
            var fname=document.forms["myForm"]["Sname"].value;
            var lname=document.forms["myForm"]["Lname"].value;
            var tel=document.forms["myForm"]["tel"].value;
            var Sid=document.forms["myForm"]["Sid"].value;
            var address=document.forms["myForm"]["address"].value;
            if ( (fname==null || fname=="") || (lname==null || lname=="") || (tel==null || tel=="") || (Sid==null || Sid=="") || (address==null || address=="") )
                {  alert("กรุณากรอกข้อมูลให้ครบ");
              return false;  }

          }
        </script>



      </head>
      <body >
        <div class="navbar navbar-inverse navbar-fixed-top" >
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="HostAdmin.php"><img src="assets/img/logo.jpg" alt="logo" style="width:180px;height:70px;"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="InputInformation.php">input information</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>

          </div>
        </div> 
        <!--/.NAVBAR END-->

        <section id="intro">
          <div style="border: 1px solid #F9D9D9; padding-left: 10%; padding-top: 5%;padding-bottom: 20%; background-color: #F9D9D9; width: 100%; height: 100%;">
            <?php 

            if ($_SESSION["result"] == false){
              echo '<h1>ท่านยังไม่พร้อมที่จะบริจาคโลหิตได้</h1>';
            } else {
              echo '<h1>ท่านสามารถบริจาคโลหิตได้</h1>';
              include "connect.php";


            $cid = $_SESSION['idnum'];
            $curryear = date('year');
            
            $age1 = $_SESSION['age'];

            $weight = $_SESSION['weight'];
            $vol = $_SESSION['w'];
            $idnum = $_SESSION['idnum'];

            $sqlcount = "(select count(dd.cid)+1 FROM donor_donation as dd WHERE dd.cid = '$idnum')";

            // echo $sqlcount."\n";

            $count = $conn->query($sqlcount);

            $datetime = date("Y-m-d");
            // echo $datetime;

            $SQL4 = "select h_name from user where username = '".$_SESSION['U']."' ";
           //echo $SQL4;
          $h = $conn->query($SQL4);
           
          $h2 = $h->fetch_assoc();

            $ssn = "(SELECT D.ssn FROM staff as S, donor_donation as D WHERE D.ssn = S.ssn)";

            $sql1 = 'INSERT INTO donor_donation (h_name, cid, age, weight, vol_blood, count, date_time) VALUES ("'.$h2['h_name'].'", "'.$cid.'", '.$age1.', '.$weight.', '.$vol.', '.$sqlcount.', "'.$datetime.'")';

             echo $sql1."\n";

             if ( $conn->query($sql1)===TRUE ){
               echo "insert complete";
             }else{
               echo "insert incomplete";
             }

            $bloodtypeSQL = "select * FROM donor as D WHERE D.cid = '$idnum'";
          //  $blood_type = $conn->query(bloodtypeSQL);
           // echo "\n".$bloodtypeSQL."\n";
            
          $result = $conn->query($bloodtypeSQL);
          $ans = $result->fetch_assoc();
          $bloodtype = $ans['blood_type'];


            if (strcmp($bloodtype, "A") == 0) {$blood = "A_vol";}
            if (strcmp($bloodtype, "B") == 0) {$blood = "B_vol";}
            if (strcmp($bloodtype, "O") == 0) {$blood = "O_vol";}
            if (strcmp($bloodtype, "AB") == 0) {$blood = "AB_vol";}
            if (strcmp($bloodtype, "A-") == 0) {$blood = "A_neg_vol";}
            if (strcmp($bloodtype, "B-") == 0) {$blood = "B_neg_vol";}
            if (strcmp($bloodtype, "O-") == 0) {$blood = "O_neg_vol";}
            if (strcmp($bloodtype, "AB-") == 0) {$blood = "AB_neg_vol";}

            $SQL2 = "update hospital set $blood = $blood + $vol where h_name = 'สภากาชาดไทย'";
            // echo $SQL2;
            $conn->query($SQL2);

            // if ($conn->query($SQL2) === TRUE ){
            //   echo "update complete";
            // }else{
            //   echo "update incomplete";
            // }
            }
            ?>

            <h2>การกรอกข้อมูลและวินิจฉัยผู้บริจาคเสร็จเรียบร้อยแล้ว</h2>
            <a href="HostAdmin.php">กลับไปยังหน้าหลัก</a>    

          </div>

        </section>
        <!-- <input type="number" name="weight"> -->

        <!--/.JUST-INTRO END-->
        <section  class="note-sec" >
         <div class="container">
           <div class="row text-center pad-row" >
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
              <i class="fa fa-quote-left fa-3x"></i>
              <p>
                อยากให้ทุกคนช่วยกันบริจาคเลือดดดดด
              </p>
            </div>
          </div>
        </div>   
      </section>

      <!--/.CLIENTS END-->
      <section id="footer-sec" >

        <div class="container">
         <div class="row  pad-bottom" >
          <div class="col-md-4">
            <h4> <strong>Project by</strong> </h4>
            <p>
              Name: <br>
              Name: <br>
              Name: <br>
              Name: <br>

            </p>

          </div>
          <div class="col-md-4">
            <h4> <strong>SOCIAL LINKS</strong> </h4>
            <p>
             <a href="#"><i class="fa fa-facebook-square fa-3x"  ></i></a>  
             <a href="#"><i class="fa fa-twitter-square fa-3x"  ></i></a>  
             <a href="#"><i class="fa fa-linkedin-square fa-3x"  ></i></a>  
             <a href="#"><i class="fa fa-google-plus-square fa-3x"  ></i></a>  
           </p>
         </div>
         <div class="col-md-4">
           <h4> <strong>OUR LOCATION</strong> </h4>
           <p>
             239 ถ. ห้วยแก้ว ต.สุเทพ อ. เมือง จ. เชียงใหม่ 50200 <br/>
             โทรศัพท์ : 0-5394-3414-16  <br/>
             โทรสาร : 0-5389-2281 <br/>
             E-mail : compsci@cmu.ac.th
           </p>
         </div>
       </div>
     </div>
   </section>         
   <!--/.FOOTER END-->
   <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
   <!-- CORE JQUERY  -->
   <script src="assets/plugins/jquery-1.10.2.js"></script>
   <!-- BOOTSTRAP SCRIPTS  -->
   <script src="assets/plugins/bootstrap.js"></script>
   <!-- CUSTOM SCRIPTS  -->
   <script src="assets/js/custom.js"></script>
 </body>
 </html>
