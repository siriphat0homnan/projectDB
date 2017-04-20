<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
    <title>Create</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script>
    function validateForm() {
        var topic = document.forms["form1"]["topic"].value;
        var detail = document.forms["form1"]["detail"].value;
        var name = document.forms["form1"]["name"].value;
        if ((topic == null || topic == "") || (detail == null || detail == "") || (name == null || name == ""))  { 
            alert("กรุณากรอกข้อมูลให้ครบ"); 
            return false; 
        }
    }
    </script>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
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
    <!--บล็อก-->

    <body>
        <form style="padding-left:2%; padding-top: 4%;" name="form1" method="post" action="postquest.php" onsubmit="return validateForm()">
            <br>
            <br>
            <h2>ตั้งกระทู้</h2> หัวข้อของกระทู้:
            <input type="text" class="form-control" required placeholder="หัวข้อกระทู้" name="topic" style="width: 25%;">
            <br> เนื้อหากระทู้:
            <textarea class="form-control" required placeholder="เนื้อหากระทู้" name="detail" style="width: 80%;" rows="10"></textarea>
            <br> ชื่อผู้ตั้งกระทู้:
            <input type="text" class="form-control" required placeholder="ชื่อผู้ตั้งกระทู้" name="name" style="width: 25%;">
            <br>
            <br>
            <center>
                <button type="submit" class="btn btn-primary">ส่ง</button>
                <button type="reset" class="btn btn-primary">ยกเลิก</button>
            </center>
        </form>
    </body>
    <!--บล็อก-->
    
    <section class="note-sec">
        <div class="container">
            <div class="row text-center pad-row">
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
    <section id="footer-sec">
        <div class="container">
            <div class="row  pad-bottom">
                <div class="col-md-4">
                    <h4> <strong>Project by</strong> </h4>
                    <p>
                        Name:
                        <br> Name:
                        <br> Name:
                        <br> Name:
                        <br>
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
                        239 ถ. ห้วยแก้ว ต.สุเทพ อ. เมือง จ. เชียงใหม่ 50200
                        <br/> โทรศัพท์ : 0-5394-3414-16
                        <br/> โทรสาร : 0-5389-2281
                        <br/> E-mail : compsci@cmu.ac.th
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
