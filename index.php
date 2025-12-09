<?php
  // index.php - Main layout page
  // Updated: 2025-12-09 - Michael Monteith

  require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo TITLE; ?> - Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo HOST_NAME; ?>css/BaseLayout.css">
</head>
<body>

  <!-- Header -->
  <header class="header">
    <?php require_once __DIR__ . '/templates/header.php'; ?>
  </header>

  <!-- Top Info -->
  <div class="topinfo">
    Welcome to <?php echo TITLE; ?> — news - Top Information
  </div>

  <!-- Main Layout -->
  <div class="layout">
    <!-- Left Column -->
    <?php require_once __DIR__ . '/templates/leftcolumn.php'; ?>

    <!-- Middle Content -->
    <main class="middle">
      <h2>Main Content</h2>
      <p>This is the homepage of <?php echo TITLE; ?>.</p>
      <p>Use this area for your primary content, scripts, or queries.</p>
    </main>

    <!-- Right Column -->
    <?php require_once __DIR__ . '/templates/rightcolumn.php'; ?>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <?php require_once __DIR__ . '/templates/footer.php'; ?>
  </footer>

</body>
</html>
