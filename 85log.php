<?php
    // limit 
    if(isset($_GET["limit"]))
    {
        $_SESSION[$sessLimit] = $_GET["limit"];
    }

    if(!isset($_SESSION[$sessLimit]))
    {
        $_SESSION[$sessLimit] = 10;
    }

    if(isset($_GET["order"]))
    {
        $_SESSION[$sessOrder] = $_GET["order"];
    }

    if(!isset($_SESSION[$sessOrder]))
    {
        $_SESSION[$sessOrder] = "asc";
    }

?>

<div class="row">
    <div class="col colLine">로그 관리</div>
</div>

<!-- 순서, ip, cmd, uri, time -->
<script>
    function changeLimit()
    {
        let limit = document.querySelector("#optLimit").value;
        location.href='main.php?cmd=<?php echo $cmd?>&limit='+limit;
        
    }
    function changeOrder()
    {
        let order = document.querySelector("#optOrder").value;
        location.href='main.php?cmd=<?php echo $cmd?>&order='+order;
        
    }
</script>

<div class="row">
    <div class="col colLine">
        <select id="optLimit" class="form-control" onChange=changeLimit()>
            <option value='0'>== 개수 ==</option>
            <?php
                for($i=10; $i<=100000; $i=$i * 10)
                {
                    if($_SESSION[$sessLimit] == $i)
                        echo "<option value='$i' selected>$i 개</option>";
                    else
                    echo "<option value='$i'>$i 개</option>";
                }
            ?>
        </select>
    </div>

    <div class="col colLine">
        <select id="optOrder" class="form-control" onChange=changeOrder()>
            <?php
                if($_SESSION[$sessOrder] == "asc")
                    echo "<option value='asc' selected>오름차순</option>";
                else
                    echo "<option value='asc'>오름차순</option>";
                
                if($_SESSION[$sessOrder] == "desc")
                    echo "<option value='desc' selected>내림차순</option>";
                else
                    echo "<option value='desc'>내림차순</option>";
            
            ?>
        </select>
    </div>
</div>

<div class="row">
    <div class="col">
        <table class='table'>
            <tr>
                <td>순서</td>
                <td>IP</td>
                <td>cmd</td>
                <td>uri</td>
                <td>time</td>
            </tr>
            <?php
                $sql = "select * from log_table order by idx $_SESSION[$sessOrder]  limit $_SESSION[$sessLimit] ";
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_array($result);
                while($data)
                {
                    $logidx = $data["idx"];
                    $logip = $data["ip"];
                    $logcmd = $data["cmd"];
                    $loguri = $data["uri"];
                    $logtime = $data["time"];
                    ?>
                    <tr>
                        <td><?php echo $logidx ?></td>
                        <td><?php echo $logip ?></td>
                        <td><?php echo $logcmd ?></td>
                        <td><a href='<?php echo $loguri ?>' target="LOGWIN"><?php echo $loguri ?></a></td>
                        <td><?php echo $logtime ?></td>
                    </tr>
                    <?php
                    $data = mysqli_fetch_array($result);
                }
            ?>
        </table>
    </div>
</div>