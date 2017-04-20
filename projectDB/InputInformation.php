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
            width: 100%;
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
            var htel = document.getElementById('htel').value;
            if ( (fname==null || fname=="") || (lname==null || lname=="") || (tel==null || tel=="") || (Sid==null || Sid=="") || (address==null || address=="") || (htel==null || htel=="") )
                {  alert("กรุณากรอกข้อมูลให้ครบ");
            //document.getElementById('htel').style.borderColor = "white";
              return false;  }
            //alert( htel.length );
            if ( htel.length < 9 ) {
              if ( htel.localeCompare("-") != 0 ){ 
                alert("ใส่เลขให้ครบ"); 
                document.getElementById('htel').style.borderColor = "red";
                //document.getElementById('htel').title = "ตัวอย่าง : 053648840";
                return false;
              }
            }else{
              document.getElementById('htel').style.borderColor = "white";
            }

          }
        </script>



      </head>
      <body >
        <?php session_start(); ?>
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

                <li><a href="input_informationA.php">input information</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>

          </div>
        </div>
        <!--/.NAVBAR END-->

        <section id="intro">
          <div class="col text-left navbar col-md-12 col-sm-12">
            <div style="border: 1px solid #F9D9D9; padding-left: 10%; padding-top: 1%; background-color: #F9D9D9;">
              <br><u><h3 style="margin-left: 20%;">ข้อมูลผู้บริจาค</h3></u> <br>
            </div>

            <form method="post" name="myForm" action="data.php" onsubmit="return validateForm();" >
              <div class="floating-box">
                <input type="radio" name="title" value="Mr" checked> นาย &nbsp;&nbsp;
                <input type="radio" name="title" value="Miss">  นาง &nbsp;&nbsp;
                <input type="radio" name="title" value="Ms"> นางสาว &nbsp;&nbsp; <br><br>

                <label for="Sname">ชื่อ:</label>
                <input type="text" class="form-control" name="Sname" placeholder="ชื่อ" pattern="[ก-ฮะาิีึืุูเแัโำไใ์็ฤฦ่้๊๋]{2,100}" title="กรุณากรอกชื่อเป็นภาษาไทย: กฤตภาสต์" style="width: 30%;"> <br>

                <label for="Lname">นามสกุล:</label>
                <input type="text" class="form-control" name="Lname" pattern="[ก-ฮะาิีึืุูเแัโำไใ์ฤฦ]{2,100}" title="กรุณากรอกนามสกุลเป็นภาษาไทย: โอภาสกุล" placeholder="สกุล" style="width: 30%; "> <br>

                <label for="date" >เดือน/วัน/ปีเกิด:</label> <input type="date" name="bday" class="form-control" style="width: 30%;"> 
                <br>

                <label for="id">เลขบัตรระจำตัวประชาชน: </label>
                <input type="text" pattern="[0-9]{13}" maxlength="13" class="form-control" name="Sid" title="เช่น 85711xxxxxxxx" style="width: 30%;"> <br>

                <label for="address">ที่อยู่:</label>
                <textarea class="form-control" style="width: 30%; height: 200%"  name="address"> </textarea> <br>

                <!--  <input type="textarea" class="form-control" name="address" style="width: 100%; height: 100%;"> --> 

                <label for="tel">เบอร์โทรศัพท์บ้าน:</label>
              <input type="text"  class="form-control" name="htel" id="htel" maxlength="9" onclick="checkTel()" placeholder="หากไม่มี โปรดใส่ -" style="width: 30%; height: 50%;"> <br><br>  <!--  pattern="[0123456789-]"
            -->
            <label for="tel">เบอร์โทรศัพท์เคลื่อนที่:</label>
            <input type="text"  class="form-control" pattern="[0-9]{10}" name="tel" maxlength="10" onclick="checkTel()" placeholder="" style="width: 30%; height: 30%;" required=""> <br>    <!-- pattern="[0-9]{10}" -->

            <label for="mail">E-mail:</label>
            <input type="email" class="form-control" name="mail" placeholder="E-mail" style="width: 30%;" data-validation="email" title="เช่น example@email.com"> <br>

            <label for="job">อาชีพ:</label>
            <input type="radio" name="job" value="student" checked>&nbsp;นักเรียน/นักศึกษา &nbsp;&nbsp;
            <input type="radio" name="job" value="police">&nbsp;ข้าราชการ,ทหาร,ตำรวจ,พนักงานรัฐวิสาหกิจ  
            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->&nbsp;&nbsp;
            <input type="radio" name="job" value="employee">&nbsp;พนักงานบริษัท,พนักงานรับจ้าง &nbsp;&nbsp;
            <input type="radio" name="job" value="monk">&nbsp;พระภิกษุ,สามเณร &nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="job" value="sale">&nbsp;ค้าขาย &nbsp;&nbsp;
            <input type="radio" name="job" value="etc">&nbsp;&nbsp;อื่นๆ<br><br>

            <label for="blood" >หมู่เลือด:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <input type="radio" name="blood" value="A" checked> A &nbsp;&nbsp;
            <input type="radio" name="blood" value="B">  B &nbsp;&nbsp;
            <input type="radio" name="blood" value="O"> O &nbsp;&nbsp;
            <input type="radio" name="blood" value="AB"> AB 
            &nbsp;&nbsp;<!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            <!-- &nbsp;&nbsp;&nbsp;&nbsp; --><input type="radio" name="blood" value="A-"> A- &nbsp;&nbsp;
            <input type="radio" name="blood" value="B-">  B- &nbsp;&nbsp;
            <input type="radio" name="blood" value="O-"> O- &nbsp;&nbsp;
            <input type="radio" name="blood" value="AB-"> AB-<br><br>

            <label for="disease">โรคประจำตัว:</label>
            <input type="text" class="form-control" name="disease" placeholder="หากไม่มีโรคประจำตัว โปรดใส่ -" style="width: 30%;"><br>


            <button type="submit" class="btn btn-default">Submit</button>

          </div>

          <!--   <div class="floating-box" style="padding-left: 0%;">
              <br><br><label for="Lname">นามสกุล:</label>
              <input type="text" class="form-control" name="Lname" pattern="[ก-ฮะาิีึืุูเแัโำไใ์ฤฦ]{2,100}" title="กรุณากรอกนามสกุลเป็นภาษาไทย: โอภาสกุล" placeholder="สกุล" style="width: 50%;"> 
              
              <label for="gender" >เพศ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
              
              <input type="radio" name="gender" value="M" checked> ชาย &nbsp;&nbsp;
              <input type="radio" name="gender" value="F">  หญิง

              <br><br>

              

              <br><br>

               <br><br><br><br>
             </div> -->
             <!-- <br><br> -->
            <!-- <div style="padding-left: 45%; border: 3px solid #F9D9D9; background-color: #F9D9D9;">
              <br><br>
              <button type="submit" class="btn btn-default">Submit</button>
            </div>     -->
          </form>
          <script>
           $.validate({
             modules: 'security, file',
             onModulesLoaded: function () {
               $('input[name="pass_confirmation"]').displayPasswordStrength();
             }
           });
         </script>
       </div>
     </section>

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
