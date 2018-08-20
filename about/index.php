<?php
include '../includes/db.inc.php';

try
{
  $sql = 'SELECT fa_icon, title, content FROM about_section';
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
        'fa_icon' => $row['fa_icon'],
        'title' => $row['title'],
        'content' => $row['content']
    );
}

include 'about.php';