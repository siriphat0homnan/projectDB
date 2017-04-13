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
                    <img src="assets/img/logo.jpg" alt="logo" style="width:180px;height:70px;">
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
                                    3.1 รับประทาน เวลา <br>
                                    3.2 ไม่ได้รับประทาน และรู้สึกหิว</td>
                                    <td><center><input type="checkbox" name="checkbox3.1" value="yes"></center>
                                      <form action="/action_page.php">
                                          <input type="time" name="usr_time">
                                          <input type="submit">
                                      </form> 
                                      <center><input type="checkbox" name="checkbox3.2" value="yes"></center></td>           
                                  </tr>
                                  <tr>
                                      <td>4. ท่านมีปัญหาต่อไปนี้<br>
                                          4.1 วันนี้ท่านกำลังเป็นไข้ หวัด ไอ เจ็บคอ ปวดศีรษะ <br><br>
                                          4.2 ท่านหายป่วย หรือสัมผัสใกล้ชิดกับผู้ป่วย ไข้หวัดใหญ่ ไข้เลือดออก
                                          หรือชิคุนกุนยา ไวรัสซิก้า (เป็นเวลากี่เดือนโปรดระบุ)
                                      </td>
                                      <td><center><br><input type="checkbox" name="checkbox4.1" value="yes"><br>
                                      <center><input type="checkbox" name="checkbox4.2" value="yes">
                                          <select>
                                              <option value="จำนวนเดือน">ระบุจำนวนเดือน</option>
                                              <option value="1m">1 เดือน</option>
                                              <option value="2m">2 เดือน</option>
                                              <option value="3m">3 เดือน</option>
                                              <option value="4m">4 เดือน</option>
                                              <option value="5m">5 เดือน</option>
                                              <option value="6m">6 เดือน</option>
                                              <option value="7m">7 เดือน</option>
                                              <option value="8m">8 เดือน</option>
                                              <option value="9m">9 เดือน</option>
                                              <option value="10m">10 เดือน</option>
                                              <option value="11m">11 เดือน</option>
                                              <option value="12m">12 เดือน</option>
                                              <option value="more12m">มากกว่า 12 เดือน</option>
                                          </select>
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
                                      <td>13. ภายใน 1 เดือนท่านใช้ยา (ระบุ)<br><br>
                                      เพื่อการรักษาโรค (ระบุ)
                                      </td>
                                      <td><center><input type="checkbox" name="checkbox13" value="yes">
                                        <br><input type="text" name="text13.1">
                                        <br><input type="text" name="text13.2">
                                      </center></td>
                                  </tr>
                                  <tr>
                                      <td>14. ได้รับการผ่าตัดใหญ่ ภายใน 6 เดือน หรือ ผ่าตัดเล็ก ภายใน 1 เดือน</td>
                                      <td><center><input type="checkbox" name="checkbox14" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                      <td>15. ผู้ที่เคยอาศัยหรือเจ็บป่วยอยู่ในประเทศอังกฤษ ระหว่าง พ.ศ.2523-2539<br>
                                      15.1 พำนักนานกว่า 6 เดือน <br>
                                      15.2 เคยรับเลือดผู้อื่น
                                      </td>
                                      <td><center><br><input type="checkbox" name="checkbox15.1" value="yes"></center>
                                      <center><input type="checkbox" name="checkbox15.2" value="yes"></center>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td><b><u>16. สำหรับสุภาพสตรี</u></b><br>
                                      16.1 คลอดบุตร หรือแท้งบุตรภายใน 6 สัปดาห์ <br>
                                      16.2 อยู่ในระหว่างมีประจำเดือน ให้นมบุตร หรือตั้งครรภ์ 
                                      </td>
                                      <td><center><br><input type="checkbox" name="checkbox16.1" value="yes"></center>
                                      <center><input type="checkbox" name="checkbox16.2" value="yes"></center>  
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>17. เคยมีประวัติติดเชื้อ หรือ ตรวจเลือดให้ผลบวกต่อเชื้อซิฟิลิส</td>
                                      <td><center><input type="checkbox" name="checkbox17" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                      <td>18. เคยได้รับจดหมาย หรือคำแนะนำให้ งดบริจาคเลือด</td>
                                      <td><center><input type="checkbox" name="checkbox18" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                      <td>19. ภายใน 12 ชั่วโมง ที่ผ่านมาท่านดื่มแอลกอฮอล์ เช่น สุรา เบียร์ ไวน์</td>
                                      <td><center><input type="checkbox" name="checkbox19" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                      <td>20. บุคคลใกล้ชิดเคยเป็นดีซ่าน (ตัวเหลือง ตาเหลือง) หรือ 
                                      เป็นพาหะของโรคไวรัสตับอักเสบบี ไวรัสตับอักเสบซี</td>
                                      <td><center><input type="checkbox" name="checkbox20" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                      <td>21. เคยถูกจำคุก หรือ มีประวัติใช้สารเสพติด</td>
                                      <td><center><input type="checkbox" name="checkbox21" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                      <td>22. น้ำหนักลดมากกว่า 5 กิโลกรัม ภายในเวลา 2 เดือน</td>
                                      <td><center><input type="checkbox" name="checkbox22" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                      <td>23. ท่าน หรือคู่ของท่าน เคยมีพฤติกรรม เพศสัมพันธ์กับหญิงบริการ
                                      ผู้ฉีดยาเสพติด ชายกับชาย ภายในระยะเวลา 6 เดือน</td>
                                      <td><center><input type="checkbox" name="checkbox23" value="yes"></center></td>
                                  </tr>
                                  <tr>
                                      <td>24. ท่านคิดว่าเลือดของท่านปลอดภัยที่จะให้แก่ผู้ป่วย</td>
                                      <td><center><input type="checkbox" name="checkbox24" value="yes"></center></td>
                                  </tr>
                          </table></h4>
                          <center><input type="submit"></center>

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
