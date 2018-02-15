<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<table class="table table-striped">
  <thead>
  <th>id</th>
  <th>Code</th>
  <th>Code 2</th>
  <th>Nom</th>
  <th>Continent</th>
  <th>Region</th>
  <th>Surface</th>
  <th>Indépendance</th>
  <th>Population</th>
  <th>Espérance de vie</th>
  <th>PIB</th>
  <th>Ancien PIB</th>
  <th>Nom Local</th>
  <th>Forme de Gouvernement</th>
  <th>Chef d'Etat</th>
  <th>Capital</th>
  


<?php
foreach ($pays as $value) {
  # code...
  ?>

  <tr>
    <td><?php echo $value->id ?></td>
    <td><?php echo $value->Code ?></td>
    <td><?php echo $value->Code2 ?></td>
    <td><?php echo $value->Name ?></td>
    <td><?php echo $value->Continent ?></td>
    <td><?php echo $value->Region ?></td>
    <td><?php echo $value->SurfaceArea ?></td>
    <td><?php echo $value->IndepYear ?></td>
    <td><?php echo $value->Population ?></td>
    <td><?php echo $value->LifeExpectancy ?></td>
    <td><?php echo $value->GNP ?></td>
    <td><?php echo $value->GNPOld ?></td>
    <td><?php echo $value->LocalName ?></td>
    <td><?php echo $value->GovernmentForm ?></td>
    <td><?php echo $value->HeadOfState ?></td>
    <td><?php echo $value->Capital ?></td>
    

  </tr> <?php } ?>

</table>

        
      </div>
    </div>


    
  </div>
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

 <?php require 'footer.php' ; ?>