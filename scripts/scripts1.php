<?php
  // scripts1.php - Modular layout page
  // Updated: 2025-12-09 - Michael Monteith

  require_once __DIR__ . '/../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo TITLE; ?> - Script 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo HOST_NAME; ?>css/BaseLayout.css">
</head>
<body>

  <!-- Header -->
  <header class="header">
    <?php require_once __DIR__ . '/../templates/header.php'; ?>
  </header>

  <!-- Top Info -->
  <div class="topinfo">
    Script1 work
  </div>

  <!-- Main Layout -->
  <div class="layout">
    <!-- Left Column -->
    <?php require_once __DIR__ . '/../templates/leftcolumn.php'; ?>

    <!-- Middle Content -->
    <main class="middle">
      <h2>Script 1 Content</h2>
      <p>This is the Script 1 page.</p>
      <p>Here you can add script-related content or run a script.</p>
    </main>

    <!-- Right Column -->
    <?php require_once __DIR__ . '/../templates/rightcolumn.php'; ?>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <?php require_once __DIR__ . '/../templates/footer.php'; ?>
  </footer>

</body>
</html>
