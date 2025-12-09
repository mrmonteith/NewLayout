<?php
require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo TITLE; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Dynamically load light or dark theme -->
  <link rel="stylesheet" href="<?php echo HOST_NAME; ?>css/BaseLayout-<?php echo THEME; ?>.css">
</head>
<body>

  <!-- Header -->
  <header class="header">
    <div class="logo">
      <a href="<?php echo HOST_NAME; ?>">
        <img src="<?php echo HOST_NAME; ?>images/logosm.png" alt="logo">
      </a>
    </div>

    <div class="title">
      <h1><?php echo TITLE; ?></h1>
    </div>
  </header>
