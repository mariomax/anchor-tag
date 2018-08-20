<?php
include '../includes/db.inc.php';

try
{
  $sql = 'SELECT font_a, step, points FROM process_section';
    // SELECT is the name of the field on the database and FROM is the name of the table.
    // Using SELECT * will include all fields from the table.
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching details: ' . $e->getMessage();
  include '404error.php';
  exit();
}

foreach ($result as $row)
{
    $process[] = array(
        'font_a' => $row['font_a'],
        'step' => $row['step'],
        'points' => $row['points']
    );
}

include 'process.php';