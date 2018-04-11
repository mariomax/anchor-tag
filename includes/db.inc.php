<?php
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=XXXXXXXXXX', 'XXXXXXXXXX', 'XXXXXXXXXX');
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
<!-- This page needs to be included from the control page.
That page needs to be the index.php so it loads first.
That's the "logic" page and contains the connection to the database.
Thank you Rocco!!! -->
