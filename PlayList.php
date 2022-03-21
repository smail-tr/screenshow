<?php
session_start();
include "readMessageplaylist.php";
if(isset($_SESSION['IdUtilisateur']) && isset($_SESSION['NomUtilisateur'])){
  if(isset($_POST['env'])){
    $res = $_POST['timel'];
   ?>
   
   <!DOCTYPE html>
   <html>
   
   <head>
     <title>PlayList</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="stylePlayList.css">
   </head>
   
   <body>
     <div class="top">
       <div class="numbre">
         <p id="present">1</p>
         <p>/</p>
         <p id="total">5</p>
       </div>
       <div class="btn">
        
         
       </div>
     </div>
     <div class="datetime">
       <div class="date">
         <span id="dayname">Day</span>,
         <span id="month">Month</span>
         <span id="daynum">00</span>,
         <span id="year">Year</span>
       </div>
       <div class="time">
         <span id="hour">00</span>:
         <span id="minutes">00</span>:
         <span id="seconds">00</span>
         <span id="period">AM</span>
         <span> <? echo $r ;?></span>
       </div>
     </div>
     <div class="container">
       <div class="centent-r">
         <video  id="track_video" onchange="change_duration()"  controls style="width: 100%; height: 100%;" preload="auto" autoplay></video>
       </div>
       <div class="centent-l">
         <img  id="track_image" style="width: 100%; height: 100%;">
       </div>
       <div class="footer">
         <h1 id="title" style="text-align: center; color: #fff;"></h1>
       </div>
     </div>
   
     <script>
       let All_song = [
         <?php
         
         include "db_connection.php"; 
         include "readMessageplaylist.php";   
         while ($row = mysqli_fetch_assoc($result)) {
           
         ?> {
             name: "<?= $row['Msg_txt'] ?> ",
             img: "<?= $row['Msg_img'] ?>",
             video: "<?= $row['Msg_video'] ?>"
           },
         <?php
         }
         ?>
   
   
       ];
     </script>
   
   
     
   
     <body onload="initClock()">
   
       <!--digital clock start-->
   
       <!--digital clock end-->
   
       <script type="text/javascript">
         function updateClock() {
           var now = new Date();
           var dname = now.getDay(),
             mo = now.getMonth(),
             dnum = now.getDate(),
             yr = now.getFullYear(),
             hou = now.getHours(),
             min = now.getMinutes(),
             sec = now.getSeconds(),
             pe = "AM";
   
           if (hou >= 12) {
             pe = "PM";
           }
           if (hou == 0) {
             hou = 12;
           }
           if (hou > 12) {
             hou = hou - 12;
           }
   
           Number.prototype.pad = function(digits) {
             for (var n = this.toString(); n.length < digits; n = 0 + n);
             return n;
           }
   
           var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
           var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
           var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
           var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
           for (var i = 0; i < ids.length; i++)
             document.getElementById(ids[i]).firstChild.nodeValue = values[i];
         }
   
         function initClock() {
           updateClock();
           window.setInterval("updateClock()", 1);
         }
       </script>
   
   
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
       <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/vue@2.6.0"></script>
   
   
   
   
   
   
   
       <script> res_var = <?php echo $res; ?>; </script>
       <!--- Add javascript file --->
       <script src="scriptPlayList.js"></script>
   
     </body>
   
   </html>
   <?php
   }}


  ?>




