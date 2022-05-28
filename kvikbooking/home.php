<?php
include("database.php");
$db = new ApartmentsDatabase();
$db->connect();
include("nav.php");
$db->authenticate();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    getNav()
    ?>
    <!-- navbar end -->
    <div class="color">
        <!-- jumbotron start -->
        <div class="color">
            <!-- jumbotron start -->
            <div class=" text-center mb-5">
                <div class="container">
                    <img src="src/img/kvik_booking.png" class="logo">
                    <p class="lead">Found yourself your favorite place!</p>
                </div>
            </div>
            <!-- jumbotron end -->

            <div class="card-deck padding-bottom-main padding-main">
                <div class="card">
                    <img class="card-img-top img-resize" src="src/img/zagreb.jpg" alt="Image of Zagreb">
                    <div class="card-body">
                        <h5 class="card-title text-center">Zagreb</h5>
                        <p class="card-text">The heart of Croatia, check our offer for the capital of Croatia!.</p>
                        <a href="city.php?city=zagreb" class="btn btn-primary text-center">Check apartments in Zagreb!</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-resize" src="src/img/pula.jpg" alt="Image of Pula">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pula</h5>
                        <p class="card-text">Found an amazing apartment in Pula.</p>
                        <a href="city.php?city=pula" class="btn btn-primary text-center">Check apartments in Pula!</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-resize" src="src/img/rijeka-1.jpg" alt="Image of Rijeka">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rijeka</h5>
                        <p class="card-text">The city whos name simply trasnlates to River! Dont let the simple name decieve you Rijeka has plenty to offer</p>
                        <a href="city.php?city=rijeka" class="btn btn-primary text-center">Check apartments in Rijeka!</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-resize" src="src/img/split.jpg" alt="Image of Split">
                    <div class="card-body">
                        <h5 class="card-title text-center">Split</h5>
                        <p class="card-text">Check out our offer for apartments in Split.</p>
                        <a href="city.php?city=split" class="btn btn-primary text-center">Check apartments in Split!</a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top img-resize" src="src/img/zadar-1.jpg" alt="Image of Zadar">
                    <div class="card-body">
                        <h5 class="card-title text-center">Zadar</h5>
                        <p class="card-text">Apartments with seaside view..</p>
                        <a href="city.php?city=zadar" class="btn btn-primary text-center">Check apartments in Zadar!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>