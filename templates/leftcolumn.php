<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<div class="column side">
  <nav>
    <ul>
      <li><a href="/NewLayout"
        class="<?= $currentPage === 'index.php' ? 'active-link' : '' ?>">Home</a></li>

      <li><a href="/NewLayout/scripts/scripts1.php"
        class="<?= $currentPage === 'scripts1.php' ? 'active-link' : '' ?>">Script 1</a></li>

      <li><a href="#"
        class="<?= $currentPage === 'articles.php' ? 'active-link' : '' ?>">Articles</a></li>

      <li><a href="#"
        class="<?= $currentPage === 'courses.php' ? 'active-link' : '' ?>">Courses</a></li>

      <li><a href="#"
        class="<?= $currentPage === 'ebook.php' ? 'active-link' : '' ?>">eBook</a></li>
    </ul>
  </nav>
</div>
