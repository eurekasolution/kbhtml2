<?php

$sendMsg = "비정상적인 접근이 감지되었습니다.
KBstar.com";
		include "sendSMS.php";


?>
<div class='row'>
    <div class='col colLine'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['CMD', 'Hit', 'IPs'],
          <?php
                $timeSql = "SELECT ADDDATE(now(), INTERVAL -60 MINUTE) as checktime";
                $timeResult = mysqli_query($conn, $timeSql);
                $timeData = mysqli_fetch_array($timeResult);

                $oneHourBefore = $timeData["checktime"];
                $cmdSql = "SELECT distinct cmd from log_table where time>='$oneHourBefore' ";
                $cmdResult = mysqli_query($conn, $cmdSql);
                $cmdData = mysqli_fetch_array($cmdResult);

                while($cmdData)
                {
                    // [ 'cmd', 12, 2], 
                    $currentCmd = $cmdData["cmd"];

                    $hitSql = "select count(*) as hit from log_table 
                                where cmd='$currentCmd' and time>='$oneHourBefore' ";
                    $hitResult = mysqli_query($conn, $hitSql);
                    $hitData = mysqli_fetch_array($hitResult);

                    $hit = $hitData["hit"];

                    $ipSql = "select distinct ip from log_table 
                                where cmd='$currentCmd' and time>='$oneHourBefore' ";  
                    $ipResult = mysqli_query($conn, $ipSql);
                    $ipCount = mysqli_num_rows($ipResult);

                    echo "['$currentCmd', $hit, $ipCount  ], ";


                    $cmdData = mysqli_fetch_array($cmdResult);
                }
          ?>
        ]);

        var options = {
          title: '페이지별 Hit / IP ',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    <div id="curve_chart" style="width: 900px; height: 500px"></div>
    </div>
</div>