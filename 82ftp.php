<?php

    function getDirs($path)
    {
        $dirHandler = opendir($path);

        while( ($filename = readdir($dirHandler)) != false  )
        {
            if(is_dir("$path/$filename"))
            {
                echo "[+] $filename<br>";
            }else
            {
                //echo "[-] $filename<br>";
            }
        }
    }

    $path = "./";

    $dir = getDirs($path);



?>