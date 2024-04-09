<?php
    
    try
        {
    // host
    define("HOST","localhost");

    // dbname
    define("DBNAME","hotel-booking");

    // user
    define("USER","root");

    // passsword
    define("PASS","");

    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."",USER, PASS);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);

    // if ($conn == true) {
    //    echo "db connection is a success";
    // }else {
    //     echo "error";
    // }
    } catch(PDOException $e)
    {
       echo $e->getMessage();
    }
?>