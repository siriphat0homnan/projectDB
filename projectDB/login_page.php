<!DOCTYPE html>
<html >
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
        <link rel="stylesheet" href="assets/css/loginstyle.css">

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
            var user=document.forms["myForm"]["username"].value;
            var pass=document.forms["myForm"]["pass"].value;
            if ( (user==null || user=="") || (pass==null || pass=="") )
                {  alert("กรุณากรอก Username ละ Password");
              return false;  }

          }
        </script>


</head>

      <body>
      
    <div class="navbar navbar-inverse navbar-fixed-top" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="MS.php">MEDICAL SURVER</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="login_page.php">ADMIN</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- header end -->
        <center>
        <div id="clouds">
          <div class="cloud x1"></div>
          <div class="cloud x2"></div>
          <div class="cloud x3"></div>
          <div class="cloud x4"></div>
          <div class="cloud x5"></div>

          <div class="cloud x1"></div>
          <div class="cloud x2"></div>
          <div class="cloud x3"></div>
          <div class="cloud x4"></div>
          <div class="cloud x5"></div>
          
          <div class="cloud x1"></div>
          <div class="cloud x2"></div>
          <div class="cloud x3"></div>
          <div class="cloud x4"></div>
          <div class="cloud x5"></div>
        </div>

        <div class="container">


          <div id="login">

            <form method="post" action="login.php" name="myForm" onsubmit="return validateForm();"">

              <fieldset class="clearfix">

                <p><span class="fontawesome-user"></span><input type="text" name = "username" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password"  name = "pass" value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" value="Sign In"></p>

              </fieldset>

            </form>

          </div> <!-- end login -->

        </div>


        <script>
         $.validate({
           modules: 'security, file',
           onModulesLoaded: function () {
             $('input[name="pass_confirmation"]').displayPasswordStrength();
           }
         });
       </script>
     </div>
     </center>


     <!--/.JUST-INTRO END-->


     <!--/.CLIENTS END-->

     <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
     <!-- CORE JQUERY  -->
     <script src="assets/plugins/jquery-1.10.2.js"></script>
     <!-- BOOTSTRAP SCRIPTS  -->
     <script src="assets/plugins/bootstrap.js"></script>
     <!-- CUSTOM SCRIPTS  -->
     <script src="assets/js/custom.js"></script>


   </body>
   </html>
