<div class="row">
    <div class="col colLine">
        <h5 class="text-primary">실시간 온도/습도</h5>
    </div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['시간', '온도', '습도'],
          <?php
            $sql = "select * from iot order by idx asc";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_array($result);
            while($data)
            {
                echo "['$data[time]', $data[temperature], $data[humidity] ],";
                $data = mysqli_fetch_array($result);
            }
          ?>
        ]);

        var options = {
          title: '실시간 온도/습도',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

<div class="row">
    <div class="col colLine">
        <div id="curve_chart" style="width: 100%; height: 800px"></div>
    </div>
</div>
<script>
    setTimeout( function(){
        location.href='main.php?cmd=65graph';
    }   , 5 * 1000); // UNIT : ms
</script>
