<?php

    function getFileExt($file)
    {
        $file = strtolower($file);
        $fileInfo = pathinfo($file);
        return $fileInfo["extension"];
    }


    if(isset($_GET["mode"]) and $_GET["mode"]=="up")
    {
        if(isset($_FILES["upfile"]) and $_FILES["upfile"]["error"]==0)
        {
            echo "Yes File<br>";
            echo "name = " . $_FILES["upfile"]["name"]. "<br>";
            echo "size = " . $_FILES["upfile"]["size"]. "<br>";
            
            $fileName = $_FILES["upfile"]["name"];
            $ext = getFileExt($fileName);
            echo "ext = $ext <br>";

            // copy
            move_uploaded_file($_FILES["upfile"]["tmp_name"], "data/secure/$fileName");


        }else
        {
            echo "No File..<br>";
        }
    }
?>


<div class="row">
    <div class="col colLine">파일업로드</div>
</div>

<form method="post" enctype="multipart/form-data" action="main.php?cmd=<?php echo $cmd?>&mode=up">
    <div class="row">
        <div class="col colLine">
            <input type="file" name="upfile">
        </div>
        <div class="col colLine">
            <button type="submit" class="btn btn-primary">업로드</button>
        </div>
        
    </div>
</form>