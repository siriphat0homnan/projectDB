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
            var user=document.forms["myForm"]["username"].value;
            var pass=document.forms["myForm"]["pass"].value;
            if ( (user==null || user=="") || (pass==null || pass=="") )
                {  alert("กรุณากรอก Username ละ Password");
              return false;  }

          }
        </script>



      </head>
      <body >

        <?php include "header.php" ?>
        <!--/.NAVBAR END-->

        <section id="intro">

        <div style=" border: 1px solid #F9D9D9; padding: 10%;width: 100%; height: 200%;text-align: center; background-color: #F9D9D9;margin-top: auto;">
            <form method="post" action="login.php" name="myForm" onsubmit="return validateForm();"">
              Username:  <input type="text" name="username"> <br><br>
              Password: <input type="Password" name="pass"> <br><br>
              <input type="submit" value="login"> <br>
            </form>
          </div>

          <script>
           $.validate({
             modules: 'security, file',
             onModulesLoaded: function () {
               $('input[name="pass_confirmation"]').displayPasswordStrength();
             }
           });
         </script>

       </section>

       <!--/.JUST-INTRO END-->
       

      <!--/.CLIENTS END-->
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
