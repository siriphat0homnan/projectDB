<?php
session_start();
?>
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
      <body>

        <div class="navbar navbar-inverse navbar-fixed-top" >
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="HostAdmin.php"> <img src="assets/img/logo.jpg" alt="logo" style="width:180px;height:70px;"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="input_information.html">input information</a></li>
                <li><a href="home.html">Logout</a></li>
              </ul>
            </div>

          </div>
        </div>
        <!--/.NAVBAR END-->

        <section id="intro">
          <div class="container ">
            <div class="col text-left navbar col-md-12 col-sm-12 " >
             <p>
              <div class="row text-left pad-row">
                <form method="post" name="myForm" action="cal_questionaire.php" >
                  <p>
                    <center><h3><b>แบบสำรวจความพร้อมในการบริจาคเลือด</b></h3></center>
                    <br>
                  </p>
                  <h4><table>

                    <tr>
                      <th><center>รายการ</center></th>
                      <th><center>คลิกเมื่อใช่</center></th>
                    </tr>
                    <tr>
                      <td>1. สุขภาพสมบูรณ์ และพักผ่อนเพียงพอ อย่างน้อย 4-6 ชั่วโมง</td>
                      <td><center><input type="checkbox" name="checkbox1" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>2. ภายใน 1 ชั่วโมงก่อนมาบริจาคฯ ท่านสูบบุหรี่</td>
                      <td><center><input type="checkbox" name="checkbox2" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>3. ก่อนมาบริจาคฯ ท่านได้รับประทานอาหาร หรือของว่าง<br>
                        3.1 รับประทานอาหารภายใน 1 ชั่วโมง <br>
                        3.2 ไม่ได้รับประทาน และรู้สึกหิว</td>
                        <td><center><input type="checkbox" name="checkbox31" value="yes"></center>
                          <center><input type="checkbox" name="checkbox32" value="yes"></center></td>           
                        </tr>
                        <tr>
                          <td>4. ท่านมีปัญหาต่อไปนี้<br>
                            4.1 วันนี้ท่านกำลังเป็นไข้ หวัด ไอ เจ็บคอ ปวดศีรษะ <br>
                            4.2 ท่านหายป่วย หรือสัมผัสใกล้ชิดกับผู้ป่วย ไข้หวัดใหญ่ ไข้เลือดออก
                            หรือชิคุนกุนยา ไวรัสซิก้า ภายใน 1 ปี
                          </td>
                          <td><center><input type="checkbox" name="checkbox41" value="yes"><br>
                            <center><input type="checkbox" name="checkbox42" value="yes">
                            </center></td>
                          </tr>
                          <tr>
                            <td>5. ถอนฟัน อุดฟัน รักษารากฟัน ขูดหินปูน ภายใน 3 เดือน<br>
                            </td>
                            <td>
                              <center><input type="checkbox" name="checkbox5" value="yes"></center>
                            </td>
                          </tr>
                          <tr>
                            <td>6. มีอาการปวดท้อง ท้องเสีย ภายใน 7 วันที่ผ่านมา</td>
                            <td><center><input type="checkbox" name="checkbox6" value="yes"></center></td>
                          </tr>
                          <tr>
                            <td>7. เคยเป็นโรคเลือด หรือเลือดไหลหลุดยาก</td>
                            <td><center><input type="checkbox" name="checkbox7" value="yes"></center></td>
                          </tr>
                          <tr>
                            <td>8. ท่านมีโรคประจำตัว ได้แก่ หัวใจ โรคปอด ลมชัก ไต ตับ เบาหวาน ความดันโลหิตสูง โรคมะเร็ง
                              ไทรอยด์ ภูมิแพ้ หอบ หืด</td>
                              <td><center><input type="checkbox" name="checkbox8" value="yes"></center></td>
                            </tr>
                            <tr>
                              <td>9. กินยาแอสไพริน ยาคลายกล้ามเนื้อ หรือ ยาแก้ปวดข้อ ภายใน 3 วัน</td>
                              <td><center><input type="checkbox" name="checkbox9" value="yes"></center></td>
                            </tr>
                            <tr>
                              <td>10. ได้รับฮอร์โมน หรือ วัคซีนใด ๆ ในระยะ 1 ปี</td>
                              <td><center><input type="checkbox" name="checkbox10" value="yes"></center></td>
                            </tr>
                            <tr>
                              <td>11. เคยเป็นไข้มาลาเรีย หรือ ไข้ป่าในระยะ 3 ปี หรือเข้าไปในเขตที่มีมาลาเรียชุกชุมใน
                                ระยะเวลา 1 ปี</td>
                                <td><center><input type="checkbox" name="checkbox11" value="yes"></center></td>
                              </tr>
                              <tr>
                                <td>12. เคยถูกสัก ลบรอยสัก เจาะหู ฝังเข็ม โดยผู้ที่มิใช่แพทย์ ในระยะ 1 ปี</td>
                                <td><center><input type="checkbox" name="checkbox12" value="yes"></center></td>
                              </tr>
                              <tr>
                                <td>13. ได้รับการผ่าตัดใหญ่ ภายใน 6 เดือน หรือ ผ่าตัดเล็ก ภายใน 1 เดือน</td>
                                <td><center><input type="checkbox" name="checkbox13" value="yes"></center></td>
                              </tr>
                              <tr>
                                <td>14. ท่าน หรือคู่ของท่าน เคยมีพฤติกรรม เพศสัมพันธ์กับหญิงบริการ
                                  ผู้ฉีดยาเสพติด ชายกับชาย ภายในระยะเวลา 6 เดือน</td>
                                  <td><center><input type="checkbox" name="checkbox14" value="yes"></center></td>
                                </tr>
                                <tr>
                                  <td><b><u>15. สำหรับสุภาพสตรี</u></b><br>
                                    15.1 คลอดบุตร หรือแท้งบุตรภายใน 6 สัปดาห์ <br>
                                    15.2 อยู่ในระหว่างมีประจำเดือน ให้นมบุตร หรือตั้งครรภ์ 
                                  </td>
                                  <td><center><br><input type="checkbox" name="checkbox151" value="yes"></center>
                                    <center><input type="checkbox" name="checkbox152" value="yes"></center>  
                                  </td>
                                </tr>
                                <tr>
                                  <td>16. เคยมีประวัติติดเชื้อ หรือ ตรวจเลือดให้ผลบวกต่อเชื้อซิฟิลิส</td>
                                  <td><center><input type="checkbox" name="checkbox16" value="yes"></center></td>
                                </tr>
                                <tr>
                                  <td>17. เคยได้รับจดหมาย หรือคำแนะนำให้ งดบริจาคเลือด</td>
                                  <td><center><input type="checkbox" name="checkbox17" value="yes"></center></td>
                                </tr>
                                <tr>
                                  <td>18. ภายใน 12 ชั่วโมง ที่ผ่านมาท่านดื่มแอลกอฮอล์ เช่น สุรา เบียร์ ไวน์</td>
                                  <td><center><input type="checkbox" name="checkbox18" value="yes"></center></td>
                                </tr>
                                <tr>
                                  <td>19. บุคคลใกล้ชิดเคยเป็นดีซ่าน (ตัวเหลือง ตาเหลือง) หรือ 
                                    เป็นพาหะของโรคไวรัสตับอักเสบบี ไวรัสตับอักเสบซี</td>
                                    <td><center><input type="checkbox" name="checkbox19" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                    <td>20. เคยถูกจำคุก หรือ มีประวัติใช้สารเสพติด ในระยะเวลา 3 ปี</td>
                                    <td><center><input type="checkbox" name="checkbox20" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                    <td>21. น้ำหนักลดมากกว่า 5 กิโลกรัม ภายในเวลา 2 เดือน</td>
                                    <td><center><input type="checkbox" name="checkbox21" value="yes"></center></td>
                                  </tr>

                                </table></h4>

                                <!-- <?php
                                session_start();
                                 $_SESSION["checkbox1"] = $checkbox1;
                                 $_SESSION["checkbox2"] = $checkbox2;
                                 $_SESSION["checkbox3.1"] = $checkbox31;
                                 $_SESSION["checkbox3.2"] = $checkbox32;
                                 $_SESSION["checkbox41"] = $checkbox41;
                                 $_SESSION["checkbox42"] = $checkbox42;
                                 $_SESSION["checkbox5"] = $checkbox5;
                                 $_SESSION["checkbox6"] = $checkbox6;
                                 $_SESSION["checkbox7"] = $checkbox7;
                                 $_SESSION["checkbox8"] = $checkbox8;
                                 $_SESSION["checkbox9"] = $checkbox9;
                                 $_SESSION["checkbox10"] = $checkbox10;
                                 $_SESSION["checkbox11"] = $checkbox11;
                                 $_SESSION["checkbox12"] = $checkbox12;
                                 $_SESSION["checkbox13"] = $checkbox13;
                                 $_SESSION["checkbox14"] = $checkbox14;
                                 $_SESSION["checkbox15.1"] = $checkbox151;
                                 $_SESSION["checkbox15.2"] = $checkbox152;
                                 $_SESSION["checkbox16"] = $checkbox16;
                                 $_SESSION["checkbox17"] = $checkbox17;
                                 $_SESSION["checkbox18"] = $checkbox18;
                                 $_SESSION["checkbox19"] = $checkbox19;
                                 $_SESSION["checkbox20"] = $checkbox20;
                                 $_SESSION["checkbox21"] = $checkbox21;
                                ?> -->

                                <center><input type="submit"></center>

                              </div>
                            </div>

                            <!-- </form>  -->
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- end left profile admin -->



                  <!--/.JUST-INTRO END-->
                  <section  class="note-sec" >
                   <div class="container">
                     <div class="row text-center pad-row" >
                      <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                        <i class="fa fa-quote-left fa-3x"></i>
                        <p>
                          อยากให้ทุกคนช่วยกันบริจาคเลือดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดดด
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
