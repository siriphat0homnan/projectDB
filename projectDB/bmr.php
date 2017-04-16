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
            $old = htmlentities($_GET['old']);
            $weight = htmlentities($_GET['weight']);
            $height = htmlentities($_GET['height']);
            $bmr_man = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $old);
            $bmr_woman = 665 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $old);
            
        }
    ?>

        <?php include "header.php" ?> 
        <!--/.NAVBAR END-->

        <section id="intro">

            <div class="container">
            <br><br>
                <h1><u><center>คำนวณการเผาผลาญพลังงาน Basal Metabolic Rate (BMR) </center></u></h1><br>
                <label for="bmr_detail_top" style="color: black; padding-left:100px; padding-right :100px;"  >
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Basal Metabolic Rate (BMR) คือ อัตราการความต้องการเผาผลาญของร่างกายในชีวิตประจำวัน หรือจำนวนแคลอรี่ขั้นต่ำที่ต้องการใช้ในชีวิตแต่ละวัน ดังนั้นการคำนวณ BMR จะช่วยให้คุณคำนวณปริมาณแคลอรี่ที่ใช้ต่อวันเพื่อรักษาน้ำหนักปัจจุบันได้ และเมื่ออายุมากขึ้นเราจะควบคุมน้ำหนักได้ยากขึ้น เพราะ BMR เราลดลง การอดอาหารก็เป็นสาเหตุหนึ่งที่ทำให้ BMR ลดลง วิธีป้องกันคือ "หมั่นออกกำลังกาย" เพื่อเพิ่มประสิทธิภาพของการเผาผลาญ ซึ่งจะทำให้ BMR ไม่ลดลงเร็วเกินไป
                 </label>


                <div class="col text-center navbar col-md-7 col-sm-7 " style="margin-left: 20%">
                   <p>

                    <div class="col-md-12">
                    <br>
                    
                 
                        <div class="row text-center pad-row">
                            <div class="alert alert-info">
                                    <form action="" method="get">
                                    <label for="old" style="padding-left:15px;" >Old (year)</label>
                                    <input type="text"  id="old" name="old" placeholder="Old" style="width: 50%;" data-validation="old"> <br><br>

                                    <label for="weight">Weight (kg.)</label>
                                    <input type="text"  id="weight" name="weight" placeholder="Weight" style="width: 50%;" data-validation="weight"> <br><br>

                                    <label for="height">Height (cm.)</label>
                                    <input type="text"  id="height" name="height" placeholder="Height" style="width: 50%;" data-validation="height"> <br><br>

                                    <input type="submit" name="submit" value="คำนวณ">
                                    </form>
                                </div>
                            </div>
                            <h1>
                            <?php 
                                echo "ชาย: ";
                                if( isset($bmr_man) ){
                                    echo ($bmr_man);
                                }else {
                                    echo (0);

                                }  
                                echo "  กิโลแคลอรี่";
                                echo "<br>";
                                echo "หญิง: ";
                                if( isset($bmr_woman) ){
                                    echo ($bmr_woman);
                                }else {
                                    echo (0);
                                }
                                echo "  กิโลแคลอรี่";

                            ?>
                            </h1>
                            <br>
                            <br>
                            <br>
                            <div class="alert alert-info text-left">
                            <center><h4><u>"การเผาผลาญพลังงานโดยปกติ = BMR x ตัวแปร"</u></h4></center>
                            <label for="bmr_detail" style="color: black;" >
                            โดยตัวแปรของเราจะขึ้นอยู่กับการออกกำลังของเราดังนี้ <br>
                            
                            นั่งทำงานอยู่กับที่ และไม่ได้ออกกำลังกายเลย = BMR x 1.2<br>
                            ออกกำลังกายหรือเล่นกีฬาเล็กน้อย ประมาณอาทิตย์ละ 1-3 วัน = BMR x 1.375<br>
                            ออกกำลังกายหรือเล่นกีฬาปานกลาง ประมาณอาทิตย์ละ 3-5 วัน = BMR x 1.55<br>
                            ออกกำลังกายหรือเล่นกีฬาอย่างหนัก ประมาณอาทิตย์ละ 6-7 วัน = BMR x 1.725<br>
                            ออกกำลังกายหรือเล่นกีฬาอย่างหนักทุกวันเช้าเย็น = BMR x 1.9<br>
                            </label>
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
