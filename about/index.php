<?php
include '../includes/db.inc.php';

try
{
  $sql = 'SELECT content, image FROM about_section';
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
    $about[] = array(
        'content' => $row['content'],
        'image' => $row['image']
    );
}

include 'about.php';