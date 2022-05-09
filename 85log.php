<div class="row">
    <div class="col colLine">로그 관리</div>
</div>

<!-- 순서, ip, cmd, uri, time -->
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
                $sql = "select * from log_table order by idx desc";
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
                        <td><?php echo $loguri ?></td>
                        <td><?php echo $logtime ?></td>
                    </tr>
                    <?php
                    $data = mysqli_fetch_array($result);
                }
            ?>
        </table>
    </div>
</div>