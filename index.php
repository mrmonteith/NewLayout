<!--
# index.php - 
# Initial Start - 2-09-2023 - Mike Monteith
# Modified -
# Working on layout to replace standard menu page using this as a base
-->
<?php require_once "./includes/config.php"; ?>

    <!-- ********** Header ********** -->
    <div class="header">
      <?php require_once "./includes/header.php"; ?>
    </div>

    <!-- ********** Top Info Line ********** -->
    <div class="topinfo">
        Test information 
        Test information
    </div>

      <!-- ********** Middle Column ********** --> 
      <?php require_once "./includes/leftcolumn.php"; ?>

    <!-- ********** Content Area ********** -->
    <div class="row">
        <!-- ******************* MIDDLE CONTENT ***********************8*** -->

        <div class="column middle">
              <h2>Main Content</h2>
              <p> Script Content</p>
              <p>More script content</p>
        </div>

        <!-- ******************* END MIDDLE CONTENT *********************** -->

        <!-- ********** Right Column ********** -->
        <?php require_once "./includes/rightcolumn.php"; ?>
    </div> <!-- *** End Content Area *** -->

    <!-- ********** Footer ********** -->
    <?php require_once "./includes/footer.php"; ?>

  </body>
</html>


