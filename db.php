<?php



    function connectDB()
    {
        $dbHost = "localhost:3306";

        $dbUser = "mykb";
        $dbName = "mykb"; 
        $dbPass = "1111";
           
        $dbPort = "3306";

        $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName, $dbPort) or die("Connect Fail to MySQL for XAMPP : %s\n". $conn->error);
        //$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        /*
        if($conn)
            echo "OK <br>";
        else
            echo "Fail<br>";
        */
        return $conn;
    }

    function closeDB($conn)
    {
        $conn->close();
    }
?>