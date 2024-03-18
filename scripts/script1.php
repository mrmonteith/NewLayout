<!--
# index.php -   Modified version from W3 Schools - CSS Website Layout
#         It didn't work right with the footer, so I had to make some changes
# Initial Start - 12-11-2023 - Mike Monteith
# Modified - 12-12-2023 - Mike Monteith - Footer was in the wrong place to work right
# Working on layout to replace BP and LX Queries menu page using this as a base
-->
<?php
  require_once "../includes/config.php";
?>

    <!-- ********** Header ********** -->
    <div class="header">
      <?php
        require_once "../includes/header.php";
      ?>
    </div>

    <!-- ********** Top Info Line ********** -->
    <div class="topinfo">
        Test information 
        Test information
    </div>

    <!-- ********** Content Area ********** -->
    <div class="row">

      <!-- ********** Left Column ********** -->
        <?php
        require_once "../includes/leftcolumn.php";
      ?>
      <!-- ********************* MAIN CONTENT ************************* -->

      <!-- ********** Middle Column ********** -->
        <div class="column middle">
          <h2>Script Content</h2>
          <p> Script Content</p>
          <p>More script content</p>
        </div>

      <!-- ********************* END MAIN CONTENT ************************* -->

      <!-- ********** Right Column ********** -->
      <?php
      require_once "../includes/rightcolumn.php";
      ?>
    </div>

    <div>
    <!-- ********** Footer ********** -->
    <?php
        require_once "../includes/footer.php";
      ?>
    </div>

  </body>
</html>


