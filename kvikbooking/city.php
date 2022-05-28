<?php
include("nav.php");
include("database.php");
$db = new ApartmentsDatabase();
$db->connect();
$db->authenticate();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="src/css/style.css">
  <?php
  $city = $_GET['city'];
  echo "<title>$city</title>";
  ?>
</head>

<body>
  <?php
  getNav()
  ?>
  <div class="color">
    <!-- jumbotron start -->
    <div class=" text-center mb-5">
      <div class="container">
        <img src="src/img/kvik_booking.png" class="logo">
        <p class="lead">Enjoy your apartment in your favorite city</p>
      </div>
    </div>
    <!-- jumbotron end -->

    <div class="card-deck">
      <?php
      $city = $_GET['city'];
      $db->fetchAllApartmentsByCity($city);
      ?>
    </div>


  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>