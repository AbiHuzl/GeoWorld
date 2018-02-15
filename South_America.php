<?php require_once 'header.php'; ?>

    <!-- Page Content -->
    <div class="container">
        <div class="col-lg-12 text-center">
          <h1>SOUTH AMERICA</h1>
            <?php
              require_once 'inc/manager-db.php';
              $continent = 'South America';
              $pays = getCountriesByContinent($continent);
              
            ?>
        </div>
      </div>
    <p></p>

     
<?php require_once 'table.php'; ?>