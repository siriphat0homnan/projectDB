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
    <?php
        if (isset($_GET['submit'])) {
            $val1 = htmlentities($_GET['weight']);
            $val2 = htmlentities($_GET['height']);
            $result = $val1 / ($val2 / 100)**2;
            
        }
    ?>

        <div class="navbar navbar-inverse navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a href="index.html"><img src="assets/img/logo.jpg" alt="logo" style="width:180px;height:70px;"></a>
            
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="news.html">NEWS</a></li>
                        <li><a href="blog.html">BLOG</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="login.html">ADMIN</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!--/.NAVBAR END-->

        <section id="intro">

            <div class="container">
            <br><br>
                <h1><u><center>การหาค่าดัชนีมวลกาย (Body Mass Index : BMI) </center></u></h1>
                <div class="col text-center navbar col-md-7 col-sm-7 " style="margin-left: 20%">
                   <p>

                    <div class="col-md-12">
                    <br>
                    
                 
                        <div class="row text-center pad-row">
                            <div class="alert alert-info">
                                    <form action="" method="get">
                                    <label for="weight">Weight (kg.)</label>
                                    <input type="text"  id="weight" name="weight" placeholder="Weight" style="width: 50%;" data-validation="weight"> <br><br>

                                    <label for="height">height (cm.)</label>
                                    <input type="text"  id="height" name="height" placeholder="Height" style="width: 50%;" data-validation="height"> <br><br>

                                    <input type="submit" name="submit" value="คำนวณ">
                                    </form>
                                </div>
                            </div>
                            <h1>
                            <?php if( isset($result) ){
                                    echo ($result);
                                }else {
                                    echo (0);
                                    }  ?>
                                    </h1>




                            <div class="row text-left pad-row">

                            <table>
                              <tr>
                                <th><h3><b><center>BMI kg/m2</center></b></h3></th>
                                <th><h3><b><center>อยู่ในเกณท์</center></b></h3></th>
                                <th><h3><b><center>ภาวะเสี่ยงต่อโรค</center></b></h3></th>
                            </tr>
                            <tr>
                                <td>&nbsp;น้อยกว่า 18.50</td>
                                <td>&nbsp;น้ำหนักน้อย / ผอม</td>
                                <td>&nbsp;มากกว่าคนปกติ</td>

                            </tr>
                            <tr>
                                <td>&nbsp;ระหว่าง 18.50 - 22.90</td>
                                <td>&nbsp;ปกติ (สุขภาพดี)</td>
                                <td>&nbsp;เท่าคนปกติ</td>

                            </tr>
                            <tr>
                                <td>&nbsp;ระหว่าง 23 - 24.90</td>
                                <td>&nbsp;ท้วม / โรคอ้วนระดับ 1</td>
                                <td>&nbsp;อันตรายระดับ 1</td>

                            </tr>
                            <tr>
                                <td>&nbsp;ระหว่าง 25 - 29.90</td>
                                <td>&nbsp;อ้วน / โรคอ้วนระดับ 2</td>
                                <td>&nbsp;อันตรายระดับ 2</td>

                            </tr>
                            <tr>
                                <td>&nbsp;มากกว่า 30</td>
                                <td>&nbsp;อ้วนมาก / โรคอ้วนระดับ 3</td>
                                <td>&nbsp;อันตรายระดับ 3</td>

                            </tr>
                        </table>
                        </div>
                    </div>
                    
                </div>

            </div>

        </section>

        <!--/.JUST-INTRO END-->
        <section  class="note-sec" >
         <div class="container">
             <div class="row text-center pad-row" >
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                    <i class="fa fa-quote-left fa-3x"></i>
                    <p>
                        อยากให้ทุกคนช่วยกันบริจาคเลือด
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
