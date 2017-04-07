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
    <title>Blog</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style type="text/css">
    .header {
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
    
    /*ตั้งกระทู้*/
    <style> .button {
        background-color: #222222;
        /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s;
        /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }
    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #222222;
    }
    
    .button1:hover {
        background-color: #222222;
        color: white;
    }
    </style>
    <!-- แถบหน้า -->
    <style>
    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
    }
    
    .pagination a.active {
        background-color: #222222;
        color: white;
    }
    
    .pagination a:hover:not(.active) {
        background-color: #ddd;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    function validateForm() {
        var user = document.forms["myForm"]["username"].value;
        var pass = document.forms["myForm"]["pass"].value;
        if ((user == null || user == "") || (pass == null || pass == ""))  { 
            alert("กรุณากรอก Username ละ Password"); 
            return false; 
        }

    }
    </script>
</head>

<body>
    <?php include "header.php" ?>
    <!--/.NAVBAR END-->
    <!-- asdfghjkl;'' -->
    <section id="intro" style="background-color: #F9D9D9;">
        <p>
            <br>
            <h2 style="padding-left:2%;">Blood Blog</h2>
            <p style="padding-right: 5%">
            <div align="right">
            <a href="form_question.html" style="align-items: right;">
                <button class="button button1" >ตั้งกระทู้</button>
            </a></div>
            </p>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อกระทู้</th>
                        <th>ชื่อผู้เขียน</th>
                        <th>จำนวนคำตอบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="blog1.php">เป็นหวัด บริจาคเลือดได้มั้ยครับ</td>
                            <td>สมหยอย</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>เชียงใหม่บริจาคเลือดที่ไหนได้บ้างครับ</td>
                            <td>สมอยสี</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>อะไรก็ได้</td>
                            <td>ตรีวิทส์</td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>
                <!-- แถบหน้า -->
                <center>
                <div class="pagination">
                  <a href="#">&laquo;</a>
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">&raquo;</a>
                            </div>
                            </center>
                            <!-- asdfghjkl -->
                            <script>
                            $.validate({
                                modules: 'security, file',
                                onModulesLoaded: function() {
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
