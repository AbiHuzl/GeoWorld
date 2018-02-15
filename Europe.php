<?php require_once 'header.php'; ?>

	 <div class="container">
        <div class="col-lg-12 text-center">
          <h1>EUROPE</h1>
            <?php
              require_once 'inc/manager-db.php';
              $continent = 'Europe';
              $pays = getCountriesByContinent($continent);
              
            ?>
        </div>
      </div>
    <p></p>

    <?php require_once 'table.php'; ?>