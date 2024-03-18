<?php
# config.php - set various site-specific informaiton

    $host = '127.0.0.1';
    define('HOST_NAME', 'http://localhost/');
    define('TITLE',' Mysite Page - change in config ');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CSS Website Layout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/BaseLayout.css">
    <!-- Need to work on this below.  Probably use document root to solve -->
    <link rel="stylesheet" href="../css/BaseLayout.css"> <!-- Because sub-pages are deeper -->
  </head>
  <body>
