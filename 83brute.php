<?php

    $pass = "";

    $now = getNow();
    echo "now = $now <br>";
    $cnt = 0;

    $exitFlag = false;

    $letters = "abcdefghijklmnopqrstuvwxyz0123456789";
    $lastLetter = $letters[strlen($letters)-1];
    $lastIndex = strlen($letters) -1;
    /*
    for($x = 0; $x < strlen($test); $x++)
    {
        echo "$x : " . $test[$x] . "<br>";
    }
    */


    for($i= 0 ; $i<=$lastIndex; $i++)
    {
        for($j=0; $j<=$lastIndex; $j++)
        {
            for($k= 0 ; $k<=$lastIndex; $k++)
            {
                for($l= 0 ; $l<=$lastIndex; $l++)
                {
                    $cnt ++;
                    $pass = $letters[$i] .$letters[$j] .$letters[$k] .$letters[$l];
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