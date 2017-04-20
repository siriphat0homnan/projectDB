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
        <title>Blog#1</title>
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLE CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLE CSS -->
        <link href="assets/css/style.css" rel="stylesheet" />    
        <!-- GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="uikit/dist/css/uikit.css" rel="stylesheet" />


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
        <!-- คอมเม้น -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
          function validateForm()
          {
            var ncomment=document.forms["comment"]["ncomment"].value;
            var tcomment=document.forms["comment"]["tcomment"].value;
            if ( (ncomment==null || ncomment=="") || (tcomment==null || tcomment=="") )
                {  alert("กรุณากรอกข้อมูลให้ครบ");
              return false;  }
          }
        </script>



      </head>
      <body >
        <?php include "header.php" ?>
        <!--/.NAVBAR END-->
        <!-- asdfghjkl;'' -->

        <section id="intro" style="background-color: #F9D9D9;">
          <form style="padding-left:2%; padding-top: 2%;">
            ------
            <?php
            include('connect.php');
            $bid=$_GET['bid'];

            $sql="SELECT * from webboard where bid=$bid";
            $result = $conn->query($sql);

            $row=$result->fetch_assoc();

            $bid=$row['bid'];
            $topic=$row['topic'];
            $name=$row['name'];
            $detail=$row['detail'];
            $date_q=$row['w_date'];

            echo "<br><br><br><br>
            <table width=532 border=1 bordercolor=0000FF>
              <tr>
                <td width=703>
                  <table width=532>
                    <tr bgcolor=222222>
                      <td width=97><font color=FFFFFF><b>หัวข้อกระทู้</b></font></td>
                      <td width=417><font color=FFFFFF><b>$topic</b></font></td>
                    </tr>

                    <tr bgcolor=CCCCCC>
                      <td width=97<b>รายระเอียด</b></td>
                      <td width=417<b>$detail</td>
                    </tr>

                    <tr bgcolor=CCCCCC>
                      <td width=97<b>ผู้ตั้งกระทู้</b></td>
                      <td width=417<b>$name</td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>";
            //echo $sql."\n";
            echo "</form>";
            $sql = "SELECT * from comment where bid=$bid";
            $result = $conn->query($sql);

            if ($result->num_rows == 0) {
              echo "ยังไม่มีผู้แสดงความคิดเห็น";
            }else{
              echo "<h4>ความคิดเห็น</h4>";
              $n=0;
              while ($row=$result->fetch_assoc()) {
                $n++;
                $bid=$row['bid'];
                $name=$row['user'];
                $detail=$row['massage'];
                $date_q=$row['date_time'];

                echo " <table width=532 border=1 bordercolor=0000FF>
                <tr>
              
              <td width=200><center>$name</center></td>
              <td width=300><center>$detail</center></td>
              <td width=300><center>$date_q</center></td>
              
            </tr>
            </table>";

            //     echo "<div style='padding-left: 2%;'>
            //     <h4>ความคิดเห็น</h4>
            //     <ul class='uk-comment-list'>
            //       <li>
            //         <article class='uk-comment uk-comment-primary'>
            //           <header class='uk-comment uk-grid-medium uk-flex-middle' uk-grid>
            //             <div class='uk-width-expand'>
            //               <h3><class='uk-comment-header uk-margin-remove'><a class='uk-link-reset'>$name</a></h3>
            //               <ul class='uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top'>
            //               </a></li>
            //             </ul>
            //           </div>
            //         </header>
            //         <div class='uk-comment-body'>
            //           <p>ความคิดเห็นที่ $n</p>
            //           <p>$detail</p>
            //         </div>
            //       </article>
            //     </li>
            //   </ul>
            // </div>";
          }
        }
        $conn->close();
        ?>
      </p>
    </div>
    <form name="comment" method="post" action="reply.php">
      <input type="hidden" name="bid" value="<?php echo $bid;?>">
      <br>
      <h5>ชื่อผู้ใช้ :</h5>
      <input type="text" class="form-control" placeholder="ชื่อ" name="name" required style="width: 25%">
      <h5>แสดงความคิดเห็น :</h5>
      <textarea class="form-control" placeholder="ความคิดเห็น" name="detail" required style="width: 50%" rows="5"></textarea><br>
      <button type="submit" class="btn btn-primary">ส่ง</button>
    </form>




    <div align="center">[<a href="blog.php">กลับหน้าจอ Blog</a>]</div>

    <!-- asdfghjkl -->

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
 <section  class="note-sec" >
   <div class="container">
     <div class="row text-center pad-row" >
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