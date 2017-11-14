<?php
include 'includes/db.inc.php';

try
{
  $sql = 'SELECT thumb, title, stats FROM work_section';
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
    $works[] = array(
        'thumb' => $row['thumb'],
        'title' => $row['title'],
        'stats' => $row['stats']
    );
}

include 'main.html.php';