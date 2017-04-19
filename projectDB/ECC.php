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
            $weight = htmlentities($_GET['weight']);
            $age = htmlentities($_GET['age']);
            $sex = htmlentities($_GET['question-one']);
            $SC = htmlentities($_GET['SC']);

            if ($sex == 'male') {
                $result = ((140 - $age) * $weight) / (72 * $SC);
            }else{
                $result = (((140 - $age) * $weight) / (72 * $SC)) * 0.85;
            }
           
            
        }
    ?>

        <?php include "header.php" ?> 
        <!--/.NAVBAR END-->

        <section id="intro">

            <div class="container">
            <br><br>
                <h1><u><center>Estimated Creatinine Clearance </center></u></h1><br>
                <label  style=" margin-left: 10%">Estimated Creatinine Clearanceการคำนวนหาการทำงานของไตเรียก Creatinine Clearance ซึ่งคำนวนได้โดยการกรอกข้อมูลลงในตาราง กรอก น้ำหนัก เพศ อายุ ค่า creatinin ในเลือด(ได้จากการเจาะเลือด)</label>
                <div class="col text-center navbar col-md-7 col-sm-7 " style="margin-left: 20%">
                   <p>

                    <div class="col-md-12">
                
                        <div class="row text-left pad-row">
                            <div class="alert alert-info">
                                    <form action="" method="get">

                                    <label for="weight">Weight (kg.)</label>
                                    <input type="text"  id="weight" name="weight" placeholder="Weight" style="width: 50%; margin-left: 12%" data-validation="weight"> <br><br>

                                    <label for="age">Age (year)</label>
                                    <input type="text"  id="age" name="age" placeholder="age" style="width: 50%; margin-left: 14%" data-validation="age"> <br><br>

                                    <label for="sex" >Sex:</label>
                                    <label style="margin-left: 20%;"><input type="radio" name="question-one" value="male"> Male</label>
                                    <label style="margin-left: 10%;"><input type="radio" name="question-one" value="female"> Female</label><br><br>

                                    <label for="SC">Serum Creatinine(Cr):</label>
                                    <input type="SC"  id="SC" name="SC" placeholder="Serum Creatinine" style="width: 50%; margin-left: 1%" data-validation="SC"> mg/dL<br><br>



                                    <input type="submit" name="submit" value="Calculate" style="width: 50%; margin-left: 25%">
                                    </form>
                                </div>
                            </div>

                            <h1 >
                            <?php 
                            echo "Estim. Creatinine Clearance = ";
                                if( isset($result) ){
                                    $result = sprintf('%0.2f', $result);
                                    echo ($result);
                                }else {
                                    echo (0);
                                }  
                                echo "  mL/min"
                            ?>
                            </h1>   
                            <br>
                            <label  class="text-left">ค่าปกติของ Creatinine Clearance (Cr) 0.5 - 1.0 มิลลิกรัม/เดซิลิตร (mg/dL) สำหรับผู้หญิง และ 0.7 - 1.2 มิลลิกรัม/เดซิลิตร สำหรับผู้ชาย<br></label>
                             <label  class="text-center">
                                    ผู้ชาย<br>
                                    ค่าเฉลี่ย: 120 ml/min/1.73 m2 (+/-25) or 175 Liters/day<br>
                                    Range: 97-137 ml/min/1.73 m2 (0.93-1.32 ml/sec/m2 IU)<br>
                                    ผู้หญิง<br>
                                    ค่าเฉลี่ย: 95 ml/min/1.73 m2 (+/-20) or 135 Liters/day<br>
                                    Range: 88-128 ml/min/1.73 m2 (0.85-1.23 ml/sec/m2 IU)<br>
                              </label>                     
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
