<?php
include '../includes/db.inc.php';

try
{
  $sql = 'SELECT greeting, paragraph, image FROM contact_section';
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
    $contacts[] = array(
        'greeting' => $row['greeting'],
        'paragraph' => $row['paragraph'],
        'image' => $row['image']
    );
}

include 'contacts.php';