<div class="row">
    <div class="col colLine">
        <h5 class="text-primary">온도 , 습도 생성기</h5>
    </div>
</div>

<?php
    $temperature = rand(250, 260)/ 10;
    $humidity = rand(650, 660)/ 10;

    $sql = "INSERT INTO iot (branch, temperature, humidity, time) 
                    VALUES('1', '$temperature', '$humidity', now() )";
    $result = mysqli_query($conn, $sql);
?>


<div class="row">
    <div class="col colLine">
        temperature = <?php echo $temperature ?> <br>
        humidity = <?php echo $humidity ?> 
    </div>
</div>

<script>
    setTimeout( function(){
        location.href='main.php?cmd=64generator';
    }   , 5 * 1000); // UNIT : ms
</script>
