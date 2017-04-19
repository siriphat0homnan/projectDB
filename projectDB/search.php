<?php
/**
 * @Author: Lock-On
 * @Date:   2017-04-06 18:52:11
 * @Last Modified by:   Lock-On
 * @Last Modified time: 2017-04-06 20:30:06
 */
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
      function validateForm(){
        var id = document.getElementyId('sid').value;
        if ( id=="" || id==null ){
            alert("กรุณากรอกเลขบัตรประจำตัวประชาชนที่ต้องการค้นหา");
            return false;
        }

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
        <form method="get" action="search.php" onclick="return validateForm()">
          <p>กรุณาใส่เลขบัตรประจำตัวประชาชน: <<input type="text" pattern="[0-9]{13}" maxlength="13" class="form-control" name="sid" id="sid" title="เช่น 85711xxxxxxxx" style="width: 30%;" required=""> </p>
          <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <br><br><br>


      <?php
      $severname = "localhost";
      $username = "root";
      $password = "";
      $dbname = "blood";

      $conn = new mysqli($severname, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("connection error".$conn->connect_error);
    }
    $conn->query("SET NAMES UTF8");

    if (isset($_GET['sid'])) {
        $sid = $_GET['sid'];
        //echo "$sid";

        $sql = "select * from donor where cid = '$sid' ";
        $result=$conn->query($sql);


        $row = $result->fetch_assoc();
        if ($row['cid']== "") {
            # code...
            echo "<h2>ไม่พบขอมูลที่ค้นหา</h2>";
        }else{

       // echo $row['cid'].$row['f_name'];
            $id = $row['cid'];

            echo '<table  align="center">';
            echo "<thead> <tr> <th>เลขประจำตัวประชาชน</th> <th>ชื่อ</th> <th>นามสกกุล</th> <th colspan='2'>แก้ไข/ลบ</th> </tr> </thead>";
            echo '<tr>';
            echo "<td>".$id."</td>";
            echo "<td>".$row['f_name']."</td>";
            echo "<td>".$row['l_name']."</td>";
            echo "<td> <a href='testedit.php?cid=$id'>แก้ไข</a> / ";
            echo "<a href='delete.php?cid=$id'>ลบ</a></td>";
            echo "</tr>";
        }

    }

    $conn->close(); 
    ?>
</div>
<table width="10%" style="border-color: #F9D9D9;" ></table>

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
