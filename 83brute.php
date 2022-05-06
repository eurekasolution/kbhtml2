<?php

    $pass = "";

    $now = getNow();
    echo "now = $now <br>";
    $cnt = 0;

    $exitFlag = false;

    for($i= ord('a') ; $i<=ord('z'); $i++)
    {
        for($j= ord('a') ; $j<=ord('z'); $j++)
        {
            for($k= ord('a') ; $k<=ord('z'); $k++)
            {
                for($l= ord('a') ; $l<=ord('z'); $l++)
                {
                    $cnt ++;
                    $pass = chr($i) .chr($j) .chr($k) .chr($l);
                    //echo "$pass<br>";

                    $sql = "select * from members where id='test' and pass=password('$pass') ";
                    $result = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($result);

                    if($data)
                    {
                        $exitFlag = true;
                        break;
                    }

                    // 찾으면 exitFlag == true
                }

                if($exitFlag == true)
                    break;
            }
            
            if($exitFlag == true)
                break;
            
        }

        if($exitFlag == true)
            break;
    }

    echo "cnt = $cnt , pass = $pass<br>";
    $now = getNow();
    echo "now = $now <br>";
?>