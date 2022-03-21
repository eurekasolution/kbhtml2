<!--
    chart : Google Chart
--> 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['은행', '점유율'],
          ['국민은행',     30],
          ['하나은행',      22],
          ['신한은행',  13],
          ['기업은행', 2],
        ]);

        var options = {
          title: '은행별 고객 분포율', 
          //is3D: true,
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.querySelector('#piechart'));

        chart.draw(data, options);
    }
</script>

<div class="row">
    <div class="col">
        <div id="piechart" style="width: 100%; height: 500px;"></div>
    </div>
</div>