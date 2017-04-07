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
                if (confirm("If you confirm!") == true) {
                    x = "You pressed OK!";
                } else {
                    x = "You pressed Cancel!";
                }
                document.getElementById("demo").innerHTML = x;
            }
        </script>
        <?php
        session_start();
        ?>
        <div class="navbar navbar-inverse navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="admin.php">Admin</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="blog.html">BLOG</a></li>

                        <li><a href="InputInformation.php">input information</a></li>
                        <li><a href="index.html">Logout</a></li>

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
                        <img class="img-circle" src="assets/img/team1.png" alt="" /><p>

                        Name Hospital: xxxxxxxx<p>
                        Name Admin: xxxxxxx  xxxxxxx<p>



                    </div>
                </div>
            </div>

            <!-- end left profile admin -->

            <div class="col text-center navbar col-md-4 col-sm-4" >
                <br><br>
                <div class="alert alert-warning">
                    <h2>ต้องการรับเลือด</h2>
                    กรุ๊ปเลือด:  
                    <form>
                      <select id="hospital" name="hospital">
                        <option value="1">O</option>
                        <option value="2">A</option>
                        <option value="3">B</option>
                        <option value="4">AB</option>
                        <option value="5">O-</option>
                        <option value="6">A-</option>
                        <option value="7">B-</option>
                        <option value="8">AB-</option>

                    </select>
                </form>
            </div>

            <div class="alert alert-warning">
                กรอกจำนวนเลือด:  <input type="text" id="num_blood" name="numblood" placeholder="ส่งจำนวนเลือด">

            </div>

            <div class="alert alert-warning">
            ยืนยัน:  <input type="submit" value="Submit" onclick="myFunction()">

            </div>
        </div>


        <!-- center profile -->


        <div class="col text-center navbar-right col-md-2 col-sm-2 " >
           <p>
            <div class="col-md-12">
                <div class="row text-center pad-row">
                    <div class="alert alert-success">
                        <div class="skill-name">Group O- 37%</div> 
                        <div class="progress progress-striped active progress-adjust">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"    aria-valuemin="0" aria-valuemax="100" style="width: 37%">
                               <span class="sr-only">100% Complete</span>


                           </div>

                       </div>

                   </div>

                   <div class="alert alert-success">
                    <div class="skill-name">Group A- 35</div> 
                    <div class="progress progress-striped active progress-adjust">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"    aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                            <span class="sr-only">100% Complete</span>

                        </div>
                    </div>

                </div>

                <div class="alert alert-success">
                    <div class="skill-name">Group B- 30%</div> 
                    <div class="progress progress-striped active progress-adjust">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"    aria-valuemin="0"            aria-valuemax="100" style="width: 30%">
                            <span class="sr-only">100% Complete</span>

                        </div>
                    </div>

                </div>

                <div class="alert alert-success">
                 <div class="skill-name">Group AB- 10%</div> 
                 <div class="progress progress-striped active progress-adjust">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100"    aria-valuemin="0"               aria-valuemax="100" style="width: 10%">
                        <span class="sr-only">100% Complete</span>

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
               <div class="skill-name">Group O 100%</div> 
               <div class="progress progress-striped active progress-adjust">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100% Complete</span>

                </div>
            </div>
            
        </div>

        <div class="alert alert-success">
         <div class="skill-name">Group A 100%</div> 
         <div class="progress progress-striped active progress-adjust">
          <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
            <span class="sr-only">100% Complete</span>

        </div>
    </div>

</div>

<div class="alert alert-success">
 <div class="skill-name">Group B 100%</div> 
 <div class="progress progress-striped active progress-adjust">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">100% Complete</span>

</div>
</div>

</div>

<div class="alert alert-success">
 <div class="skill-name">Group AB 100%</div> 
 <div class="progress progress-striped active progress-adjust">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">100% Complete</span>

</div>
</div>

</div>

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
