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
        <?php session_start(); ?>
        <div class="navbar navbar-inverse navbar-fixed-top" >
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <img src="assets/img/logo.jpg" alt="logo" style="width:180px;height:70px;">
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="InputInformation.php">input information</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div>

          </div>
        </div>
        <!--/.NAVBAR END-->

        <section id="intro">
        <form method="post" action="inputWeight.php">
            <div class="container ">
              <div class="col text-left navbar col-md-12 col-sm-12 " >
               <p>
                <div class="row text-left pad-row">
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
                      <td><b><u>เฉพาะสุภาพสตรี</u></b></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>1. อยู่ในระหว่างตั้งครรภ์</td>
                      <td><center><input type="checkbox" name="checkbox1" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>2. คลอดบุตรในอีกระยะเวลา (ระบุ)</td>
                      <td><center>

                        <select>
                          <option value="จำนวนเดือน">ระบุจำนวนเดือน</option>
                          <option value="1 เดือน">1 เดือน</option>
                          <option value="2 เดือน">2 เดือน</option>
                          <option value="3 เดือน">3 เดือน</option>
                          <option value="4 เดือน">4 เดือน</option>
                          <option value="5 เดือน">5 เดือน</option>
                          <option value="6 เดือน">6 เดือน</option>
                          <option value="7 เดือน">7 เดือน</option>
                          <option value="8 เดือน">8 เดือน</option>
                          <option value="9 เดือน">9 เดือน</option>
                        </select>
                        <select>
                          <option value="จำนวนวัน">ระบุจำนวนวัน</option>
                          <option value="1 วัน">1 วัน</option>
                          <option value="2 วัน">2 วัน</option>
                          <option value="3 วัน">3 วัน</option>
                          <option value="4 วัน">4 วัน</option>
                          <option value="5 วัน">5 วัน</option>
                          <option value="6 วัน">6 วัน</option>
                          <option value="7 วัน">7 วัน</option>
                          <option value="8 วัน">8 วัน</option>
                          <option value="9 วัน">9 วัน</option>
                          <option value="10 วัน">10 วัน</option>
                          <option value="11 วัน">11 วัน</option>
                          <option value="12 วัน">12 วัน</option>
                          <option value="13 วัน">13 วัน</option>
                          <option value="14 วัน">14 วัน</option>
                          <option value="15 วัน">15 วัน</option>
                          <option value="16 วัน">16 วัน</option>
                          <option value="17 วัน">17 วัน</option>
                          <option value="18 วัน">18 วัน</option>
                          <option value="19 วัน">19 วัน</option>
                          <option value="20 วัน">20 วัน</option>
                          <option value="21 วัน">21 วัน</option>
                          <option value="22 วัน">22 วัน</option>
                          <option value="23 วัน">23 วัน</option>
                          <option value="24 วัน">24 วัน</option>
                          <option value="25 วัน">25 วัน</option>
                          <option value="26 วัน">26 วัน</option>
                          <option value="27 วัน">27 วัน</option>
                          <option value="28 วัน">28 วัน</option>
                          <option value="29 วัน">29 วัน</option>
                        </select>
                      </center></td>           
                    </tr>
                    <tr>
                      <td>3. อยู่ในระยะให้นมบุตร</td>
                      <td><center><input type="checkbox" name="checkbox3" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>4. คลอดบุตร หรือแท้งบุตร ภายใน 6 เดือนที่ผ่านมา (โปรดระบุจำนวนเดือน)<br>
                      </td>
                      <td>
                        <center>
                          <select>
                            <option value="จำนวนเดือน">ระบุจำนวนเดือน</option>
                            <option value="1 เดือน">1 เดือน</option>
                            <option value="2 เดือน">2 เดือน</option>
                            <option value="3 เดือน">3 เดือน</option>
                            <option value="4 เดือน">4 เดือน</option>
                            <option value="5 เดือน">5 เดือน</option>
                            <option value="6 เดือน">6 เดือน</option>
                          </select>
                        </center>
                      </td>
                    </tr>
                    <tr>
                      <td><b><u>คำถามสำหรับผู้บริจาคสุภาพบุรุษและสุภาพสตรี</u></b></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>5. ท่านมีเพศสัมพันธ์กับผู้อื่นที่ไม่ใช่คู่ของท่าน</td>
                      <td><center><input type="checkbox" name="checkbox5" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>6. ท่านมีเพศสัมพันธ์กับเพศเดียวกัน (ตอบเฉพาะเพศชาย)</td>
                      <td><center><input type="checkbox" name="checkbox6" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>7. คู่ของท่านมีเพศสัมพันธ์กับผู้อื่น</td>
                      <td><center><input type="checkbox" name="checkbox7" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>8. คู่ของท่านมีเพศสัมพันธ์กับเพศเดียวกัน (ตอบเฉพาะเพศหญิงที่มีคู่เป็นชาย)</td>
                      <td><center><input type="checkbox" name="checkbox8" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>9. ท้องเสีย ท้องร่วง ใน 7 วันที่ผ่านมา</td>
                      <td><center><input type="checkbox" name="checkbox9" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>10. น้ำหนักลดลงอย่างรวดเร็วในระยะ 3 เดือนที่ผ่านมาโดยไม่ทราบสาเหตุ</td>
                      <td><center><input type="checkbox" name="checkbox10" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>11. ถอนฟัน อุดฟัน ขูดหินปูนและรักษารากฟันภายใน 3 วันที่ผ่านมา</td>
                      <td><center><input type="checkbox" name="checkbox11" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>12. ได้รับการผ่าตัดเล็ก ภายใน 7 วัน ที่ผ่านมา</td>
                      <td><center><input type="checkbox" name="checkbox12" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>13. ได้รับการผ่าตัดใหญ่ ภายใน 6 เดือนที่ผ่านมา</td>
                      <td><center><input type="checkbox" name="checkbox13" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>14. มีอาการมึนเมาจากการดื่มแอลกอฮอล์ หรือสารอื่นๆ</td>
                      <td><center><input type="checkbox" name="checkbox14" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>15. เคยมีประวัติติดยาเสพติด หรือเพิ่งพ้นโทษ ในระยะ 3 ปี</td>
                      <td><center><input type="checkbox" name="checkbox15" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>16. เคยเจ็บป่วยต้องรับโลหิตของผู้อื่นในระยะ 12 เดือนที่ผ่านมา</td>
                      <td><center><input type="checkbox" name="checkbox16" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>17. เข้าไปในพื้นที่ที่มีเชื้อมาลาเรียชุกชุมในระยะ 12 เดือนที่ผ่านมา</td>
                      <td><center><input type="checkbox" name="checkbox17" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>18. ป่วยเป็น มาลาเรีย ในระยะ 3 ปีที่ผ่านมา</td>
                      <td><center><input type="checkbox" name="checkbox18" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>19. เคยเจ็บป่วยต้องรับโลหิตของผู้อื่นที่ประเทศอังกฤษ ในระหว่าง ปีพ.ศ. 2523-2539</td>
                      <td><center><input type="checkbox" name="checkbox19" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>20. เคยพำนักอยู่ที่ประเทศอังกฤษ ในระหว่างปี พ.ศ. 2523-2539 เป็นระยะเวลา 6 เดือนขึ้นไป</td>
                      <td><center><input type="checkbox" name="checkbox20" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>21. สุขภาพสมบูรณ์และพักผ่อนเพียงพอ พร้อมที่จะบริจาคโลหิต</td>
                      <td><center><input type="checkbox" name="checkbox21" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>22. เพิ่งรับประทานอาหารที่มีไขมันสูง ภายใน 6 ชั่วโมง</td>
                      <td><center><input type="checkbox" name="checkbox22" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>23. เจาะหูหรืออวัยวะอื่น สัก ลบรอยสัก ฝังเข็ม <br>
                        23.1 เจาะ สัก ลบรอยสัก ฝังเข็ม โดยวิธีสะอาด ปราศจากเชื้อ<br>
                        23.2 เจาะ สัก ลบรอยสัก ฝังเข็ม มานานกว่า 1 ปี
                      </td>
                      <td>
                        <center>
                          <br><input type="checkbox" name="checkbox23.1" value="yes">
                          <br><input type="checkbox" name="checkbox23.2" value="yes">
                        </center>
                      </td>
                    </tr>
                    <tr>
                      <td>24. เคยรับวัคซีน เพื่อป้องกันโรค ภายใน 2 เดือน</td>
                      <td>
                        <center><input type="checkbox" name="checkbox24" value="yes"></center>
                      </td>
                    </tr>
                    <tr>
                      <td>25. เคยรับเซรุ่ม ภายใน 1 ปี</td>
                      <td>
                        <center><input type="checkbox" name="checkbox25" value="yes"></center>
                      </td>
                    </tr>
                    <tr>
                      <td>26. รับประทานยาแอสไพริน ยาคลายกล้ามเนื้อ ยาแก้ปวดข้อหรือ ยาอื่นๆ ในกลุ่มเดียวกัน</td>
                      <td><center><input type="checkbox" name="checkbox26" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>27. รับประทานยาแก้อักเสบ หรือยาอื่นๆ</td>
                      <td><center><input type="checkbox" name="checkbox27" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>28. เคยเป็นโรคตับอักเสบ</td>
                      <td><center><input type="checkbox" name="checkbox28" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>29. เคยเป็นโรคตับอักเสบก่อนอายุ 11 ปี</td>
                      <td><center><input type="checkbox" name="checkbox29" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>30. คนในครอบครัวเป็นโรคตับอักเสบใน 6 เดือนที่ผ่านมา</td>
                      <td><center><input type="checkbox" name="checkbox30" value="yes"></center></td>
                    </tr>
                    <tr>
                      <td>31. เป็น/เคยเป็น โรคหอบหืด ลมชัก โรคผิวหนังเรื้อรัง ไอเรื้อรัง วัณโรค <br>ภูมิแพ้ โรคความดันโลหิตสูง เบาหวาน หัวใจ ไทรอยด์ มะเร็ง โรคโลหิตออกง่าย - หยุดยาก <br>หรือโรคอื่นๆ</td>
                      <td>
                        <center>
                          <br><input type="checkbox" name="checkbox31" value="yes">
                          <br><input type="text">
                        </center></p>
                      </td>
                    </tr>

                  </table></h4>
                  

                  <center><input type="submit"></center>
                </form>
              </div>
            </div>

            <!-- </form>  -->
          </div>
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
