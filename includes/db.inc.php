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
        include '404error.php';
        exit();
    }
?>