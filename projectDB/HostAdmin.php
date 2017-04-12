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

    </head>
    <body >
        <script>
          function myFunction() {
            var x;
            
            if (document.getElementById('num_blood').value=="" || document.getElementById('num_blood').value==null) { 
                alert("ยังไม่ได้กรอกปริมาณเลือด");
                return false;} 
            }
        </script>

        <?php
        session_start();
        $user = $_SESSION['U'];
        include 'connect.php';
        $sql = "select h_name from user where username = '$user' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $hos = $row['h_name'];
        ?>

        <div class="navbar navbar-inverse navbar-fixed-top" >
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="HostAdmin.php">Admin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="InputInformation.php">input information</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

</div>
</div>
<!--/.NAVBAR END-->

<section id="intro">
  <div class="container ">
    <div class="col text-center navbar col-md-3 col-sm-3 " >
       <div class="row text-left pad-row">
          <div class="alert alert-warning"> 
            Name Hospital: <?php echo $hos; ?> <p>
            Name Admin: xxxxxxx  xxxxxxx<p>
        </div>

        <div class="alert alert-warning"> 
            <center><input type="submit" value="แก้ไขข้อมูลผู้บริจาค"></center>
        </div>


    </div>
</div>

<!-- end left profile admin -->

<?php

$sql = "select h_name,username from user where username <> '$user'";
$result = $conn->query($sql); 
?>

<div class="col text-center navbar col-md-5 col-sm-5 " >



    <form method="post" action="sendblood.php">
     <div class="row text-left pad-row">
         
         <div class="alert alert-warning"> 
          โรงพยาบาล:
          <select id="hospital" name="hospital">

            <?php
            $i = 1;
            while ($row=$result->fetch_assoc()) {
              $name = $row['h_name'];
              echo '<option value="'.$row['username'].'">';
              echo $name."</option>";
              $i++;
          }

          ?>

      </select>

  </div>


  <div class="alert alert-warning">
      กรุ๊ปเลือด:  

      <select id="hospital" name="blood_type">
          <option  value="O_vol">O</option>
          <option value="A_vol">A</option>
          <option value="B_vol">B</option>
          <option value="AB_vol">AB</option>
          <option value="O_neg_vol">O-</option>
          <option value="A_neg_vol">A-</option>
          <option value="B_neg_vol">B-</option>
          <option value="AB_neg_vol">AB-</option>

      </select>

  </div>

  <div class="alert alert-warning">
      กรอกจำนวนเลือด(ml):  <input type="text" id="num_blood" name="num_blood">

  </div>

  <div class="alert alert-warning">
      ยืนยัน:  <input type="submit" value="Submit" name="submit">

  </div>



</div>
</div>
</from>

<!-- center profile -->

<?php

$sql2= "select * from hospital inner join user on hospital.h_name=user.h_name where username = '$user'";
$result2 = $conn->query($sql2); 
$row = $result2->fetch_assoc();
        /*  while( $row = $result2->fetch_assoc()){
        
         // echo $row['A_vol'];
        }*/
        $a = $row['A_vol'];
        $b = $row['B_vol'];
        $o = $row['O_vol'];
        $ab = $row['AB_vol'];

        $an = $row['A_neg_vol'];
        $bn = $row['B_neg_vol'];
        $on = $row['O_neg_vol'];
        $abn = $row['AB_neg_vol'];

        $div =  max($a,$b,$o,$ab,$an,$bn,$on,$abn);

        $conn->close();
        ?>


        <div class="col text-center navbar-right col-md-2 col-sm-2 " >
           <p>
              <div class="col-md-12">
                <div class="row text-center pad-row">
                  <div class="alert alert-success">
                   <?php
                   echo '<div class="skill-name">Group O- '.ceil($on/$div * 100)."%</div>"; 
                   ?> 
                   <div class="progress progress-striped active progress-adjust">
                      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"    aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ceil($on/$div * 100); ?>%">
                         <span class="sr-only">100% Complete</span>
                         <?php echo ($on); ?>

                     </div>

                 </div>

             </div>

             <div class="alert alert-success">
                <?php             echo '<div class="skill-name">Group A- '.ceil($an/$div * 100).'%</div>' ;  ?> 
                <div class="progress progress-striped active progress-adjust">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"    aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ceil($an/$div * 100); ?>%">
                      <span class="sr-only">100% Complete</span>
                      <?php echo ($an); ?>

                  </div>
              </div>

          </div>

          <div class="alert alert-success">
            <?php            echo  '<div class="skill-name">Group B- '.ceil($bn/$div * 100).'%</div>'; ?> 
            <div class="progress progress-striped active progress-adjust">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"    aria-valuemin="0"            aria-valuemax="100" style="width: <?php echo ceil($bn/$div * 100); ?>%">
                  <span class="sr-only">100% Complete</span>
                  <?php echo ($bn); ?>
              </div>
          </div>

      </div>

      <div class="alert alert-success">
        <?php          echo   '<div class="skill-name">Group AB- '.ceil($abn/$div * 100).'%</div>' ; ?> 
        <div class="progress progress-striped active progress-adjust">
          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"    aria-valuemin="0"               aria-valuemax="100" style="width: <?php echo ceil($abn/$div * 100); ?>%">
            <span class="sr-only">100% Complete</span>
            <?php echo ($abn); ?>
        </div>
    </div>

</div>
</div>
</div>
</div>



<div class="col text-center navbar-right col-md-2 col-sm-2" >
  <p>
     <div class="col-md-16">
       <div class="col text-center pad-row">
         <div class="alert alert-success">
            <?php            echo '<div class="skill-name">Group O '.ceil($o/$div * 100).'%</div>'   ?> 
            <div class="progress progress-striped active progress-adjust">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ceil($o/$div * 100); ?>%">
                <span class="sr-only">100% Complete</span>
                <?php echo ($o); ?>
            </div>
        </div>

    </div>

    <div class="alert alert-success">
        <?php         echo  '<div class="skill-name">Group A '.ceil($a/$div * 100).'%</div>'; ?> 
        <div class="progress progress-striped active progress-adjust">
            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ceil($a/$div * 100); ?>%">
              <span class="sr-only">100% Complete</span>
              <?php echo ($a); ?>
          </div>
      </div>

  </div>

  <div class="alert alert-success">
   <div class="skill-name">Group B <?php echo ceil($b/$div * 100); ?>%</div> 
   <div class="progress progress-striped active progress-adjust">
      <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ceil($b/$div * 100); ?>%">
        <span class="sr-only">100% Complete</span>
        <?php echo ($b); ?>
    </div>
</div>

</div>

<div class="alert alert-success">
 <div class="skill-name">Group AB <?php echo ceil($ab/$div * 100); ?>%</div> 
 <div class="progress progress-striped active progress-adjust">
    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ceil($ab/$div * 100); ?>%">
      <span class="sr-only">100% Complete</span>
      <?php echo ($ab); ?>
  </div>
</div>

</div>

</div>
</div>
</div>
</div>
</section>

<!--/.JUST-INTRO END-->

<!--/.CLIENTS END-->
<?php include 'footer.php'; ?>

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
