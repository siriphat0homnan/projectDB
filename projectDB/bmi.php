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

        <?php include "header.php" ?> 
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
