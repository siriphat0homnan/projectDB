<?php
/**
 * @Author: sahapap
 * @Date:   2017-04-12 22:16:07
 * @Last Modified by:   Lock-On
 * @Last Modified time: 2017-04-20 08:44:56
 */
session_start();

//echo $_SESSION['ID'];

//$title = $_POST['title'];
$first = $_POST['Sname'];
$last = $_POST['Lname'];
//$birth = $_POST['bday'];
$cid = $_POST['Sid'];
$address = $_POST['address'];
$htel = $_POST['htel'];
//$blood = $_POST['blood'];
$job = $_POST['job'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$disease = $_POST['disease'];

//echo $first." ".$last." ".$cid."<br>";
//echo $birth."<br>";
/*echo $address."<br>";
echo $htel."<br>";
echo $tel."<br>";
echo $job."<br>";
*///echo $blood."<br>";
/*echo $mail."<br>";
echo $disease."<br>";
*/
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

include 'connect.php';

$sql =  "update donor set f_name='$first', l_name='$last', address='$address', job='$carrer', email='$mail', disease='$disease' where cid='$cid'";

//echo "\n".$sql;



?>


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
    if ($conn->query($sql)=== TRUE){
    //echo "\n update Complete";
        
        $d = "delete from donor_tel where cid='$cid'";

    //echo "\n".$d."\n";

        if ( $conn->query($d)===TRUE ) {
        //echo "delete tel complete";
        }else{
        //echo "delete fail";
        }

        if ( strcmp($tel,"-")!=0 ){
            $sql = "insert into donor_tel values ('$cid','$tel')";
            $conn->query($sql);
        }


        if ( strcmp($htel,"-")!=0 ){
            $sql = "insert into donor_tel values ('$cid','$htel')";
            $conn->query($sql);
        }

        echo "<script>alert('แก้ไขข้อมูลได้เวร็จสิ้นแล้ว');</script>";
        echo "<center><h2><a href='search.php'>กลับสู่หน้าหลัก</a></h2></center>";

    }else{
        echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
        echo "<center><h2><a href='search.php'>กลับสู่หน้าหลัก</a></h2></center>";
    }





    $conn->close();
    ?>

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
