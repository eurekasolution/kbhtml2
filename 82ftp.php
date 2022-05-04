<?php

    function getDirs($path)
    {
        echo "path = $path <br>";
        $dirHandler = opendir($path);
        while( ($filename = readdir($dirHandler)) != false  )
        {
            if(is_dir("$path/$filename"))
            {
                //echo "[+] $filename<br>";
                $files[] = $filename;
            }else
            {
                //echo "[-] $filename<br>";
            }
        }

        return $files;
    }

    function getFiles($path)
    {
        $dirHandler = opendir($path);
        while( ($filename = readdir($dirHandler)) != false  )
        {
            if(is_dir("$path/$filename"))
            {
                //echo "[+] $filename<br>";
            }else
            {
                //echo "[-] $filename<br>";
                $files[] = $filename;
            }
        }

        return $files;
    }


    function readFileKB($path)
    {
        // error
        if( !$handler = fopen($path, 'r'))
        {
            return "File Open Error";
        }

        $fileContent = file_get_contents($path, true);
        return $fileContent;
    }


    $sess_dir = "sess_dir";
    
    if(!isset($_SESSION[$sess_dir]) or $_SESSION[$sess_dir]== "")
        $_SESSION[$sess_dir] = "./";

    if(isset($_GET["pdir"]))
    {
        $_SESSION[$sess_dir] = $_GET["pdir"];
    }

    $path = $_SESSION[$sess_dir];

    $dir = getDirs($path);
    $files = getFiles($path);

    if($dir)
        sort($dir);
    if($files)
        sort($files);


    echo "sess dir = ". $_SESSION[$sess_dir]."<br>";  
    
    if(isset($_GET["rfile"]))
    {
        $memo = readFileKB($_SESSION[$sess_dir]."/".$_GET["rfile"]);
    }else
    {
        $memo = "파일읽기 아님";
    }

    if(isset($_POST["fname"]) and strlen($_POST["fname"])>=1)
    {
        echo "fname = " . $_POST["fname"] . "<br>";
        $fileName = $_POST["fname"];

        $pathFile = $_SESSION[$sess_dir] . "/" . $fileName;

        if(file_exists($pathFile))
        {

        }else
        {
            if(!$handler = fopen($pathFile, 'w'))
            {
                echo "open error<br>";
            }
            
            echo "content = $content <br>";

            if(fwrite($handler, $_POST["content"]) == false)
                echo "fwrite error<br>";

            echo "
            <script>
                alert('성공');
                // 
            </script>
            ";

        }


    }else
    {
        echo "no fname <br>";
    }



    ?>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>?cmd=<?php echo $cmd?>">
    <div class="row">
        <div class="col">
            <textarea class="form-control" name="content"  rows="10"><?php echo $memo?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            파일명
        </div>
        <div class="col">
            <input type="text" name="fname" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">등록/수정</button>
        </div>
    </div>
</form>

    <?php




    echo "
    <table class='table'>
        <tr>
            <td>
                <table class='table'>
    ";

    $dirCnt = 0;
    while(isset($dir[$dirCnt]) and $dir[$dirCnt])
    {
        $nextDir = $_SESSION[$sess_dir] ."/".$dir[$dirCnt];
        $nextDir = str_replace("//", "/", $nextDir);


        ?>
        <tr>
            <td> 
                <a href='main.php?cmd=<?php echo $cmd?>&pdir=<?php echo $nextDir ?>'><span class='material-icons'>folder</span> 
                <?php echo $dir[$dirCnt]?></a>
            </td>
        </tr>

        <?php
        $dirCnt ++;
    }

        echo "
                </table>
            </td>
            <td>
                <table class='table'>
        ";

    $fileCnt = 0;
    while(isset($files[$fileCnt]) and $files[$fileCnt])
    {
        ?>
        <tr>
            <td> 
                <a href='<?php echo $_SERVER["PHP_SELF"] ?>?cmd=<?php echo $cmd?>&rfile=<?php echo $files[$fileCnt]?>'>
                <span class='material-icons'>description</span> 
                <?php echo $files[$fileCnt]?>
                </a>
            
            </td>
        </tr>

        <?php
        $fileCnt ++;
    }

    echo "
                </table>
            </td>
        </tr>
    </table>";



?>