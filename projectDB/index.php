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
            var myVar = setInterval(myTimer, 1000);

            function myTimer() {
                var d = new Date();
                document.getElementById("demo").innerHTML = d.toLocaleTimeString();
            }

        </script>
        <?php include "header.php" ?>
        <!--/.NAVBAR END-->
        
        <section id="home" class="text-center">

            <div id="carousel-example" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/01.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="assets/img/02.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="assets/img/03.jpg" alt="" />                        
                    </div>
                </div>

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                    <li data-target="#carousel-example" data-slide-to="2"></li>
                </ol>
            </div>

        </section>
        <!--/.SLIDESHOW END-->


        <section id="intro">
            <div class="container">

                <div class="col text-center navbar col-md-4 col-sm-4">
                   <p>

                    <div class="col-md-12">
                        <div class="row text-left pad-row">
                            <div class="alert alert-info">
                                <p><span style="font-size: 20px;"><center><h4>โอนเงินเข้าบัญชีสภากาชาดไทย</h4></center></span></p>
                                ชื่อบัญชี : สภากาชาดไทย <br>เพื่อการรับบริจาคเงินต่างๆ<br>
                                เลขที่ : <span style="color: #ff0000;"><strong>XXX-X-XXXXX-X</strong></span><br>
                                ประเภท : ออมทรัพย์<br>
                                ธนาคาร : ไทยพาณิชย์<br>
                                สาขา : สภากาชาดไทย<br>
                                สอบถามโทร.&nbsp;<span style="color: #ff0000;"><strong>XX-XXX-XXXX&nbsp;</strong></span><br>
                                <br>
                                E-mail&nbsp;<span style="color: #ff0000;"><strong><a href="XXXX@XXXX.or.th">XXXX@XXXX.or.th</a></strong></span> </p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end contact -->
                <br><br>
                <div class="col text-center navbar-right col-md-3 col-sm-3 " >

                    <div class="row text-center pad-row">
                        <div class="alert alert-info">
                            <span style="color: #ff0000;">
                                <h2><b>TIME <p id="demo"></p></b></h2>
                            </span>
                        </div>



                        

                    </div>

                    <!-- end bmi -->
                </div>
            </section>

        <?php include "footer.php" ?>        
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
