<?php
    
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=worldwi3_atd_17', 'worldwi3_atd_user', 'atDesign2017_OCT');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec('SET NAMES "utf8"');
    }
    catch (PDOException $e)
    {
        $error = 'Unable to connect to the database server.';
        echo $e->getMessage();
        include 'error.php';
        exit();
    }
// This is working (10/26/2017) let's make it an include that we can not share on GitHub.
?>