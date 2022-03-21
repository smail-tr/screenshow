<?php
session_start();

include "updateMessageType2.php";
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="styleView.css">

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="font/font/flaticon.css">
</head>

<body>
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
    </div>
  </div>
  <div class="container">
    <div class="centent-r">
      <video src="<?= $upl.$row['Msg_video'] ?>" style="width: 100%; height: 100%;" autoplay></video>
    </div>
    <div class="centent-l">
      <img src="<?= $upl.$row['Msg_img'] ?>" style="width: 100%; height: 100%;">
    </div>
    <div class="footer">
      <h1 style="text-align: center; color: #fff;"><?= $row['Msg_txt'] ?></h1>
    </div>
  </div>



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

    <script src="scriptView.js"></script>



  </body>

</html>