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
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <?php
    getNav()
    ?>
    <div class="color">
        <div class=" text-center mb-5">
            <div class="container">
                <h1 class="display-4">Add an appartment!</h1>
            </div>
        </div>
        <div class="container margin-bottom-card">
            <form class="p-4 w-50 mx-auto pt-4 bg-light rounded-lg shadow-sm" action="addingApartments.php" method="POST">
                <div class="form-group">
                    <label for="title">Apartment name:</label>
                    <input required minlength="3" maxlength="254" id="title" class="form-control" name="title" type="text" placeholder="Enter apartment name">
                </div>
                <div class="form-group">
                    <label for="description">Apartment Description:</label>
                    <textarea class="form-control" id="description" name="description" rows="3" maxlength="999"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Apartment Price:</label>
                    <input required maxlenght="9" id="price" class="form-control" name="price" type="number" placeholder="Enter the apartment price">
                </div>
                <div class="form-group">
                    <label for="lastname">Balconies:</label>
                    <input required maxlenght="1" id="balconies" class="form-control" name="balconies" type="number" value="0">
                </div>
                <div class="form-group">
                    <label for="lastname">Rooms:</label>
                    <input required maxlenght="2" id="rooms" class="form-control" name="rooms" type="number" value="0">
                </div>
                <div class="form-group">
                    <label for="lastname">Owner:</label>
                    <input required maxlenght="254" id="owner" class="form-control" name="owner" type="text" placeholder="Enter the owners name">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="pets" id="pets">
                    <label class="form-check-label" for="pets">
                        Pets allowed
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="parking" id="parking">
                    <label class="form-check-label" for="parking">
                        Parking
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="ac" id="ac">
                    <label class="form-check-label" for="ac">
                        Air conditioning
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" name="wifi" id="wifi">
                    <label class="form-check-label" for="wifi">
                        WIFI
                    </label>
                </div>
                <div class="form-group">
                    <label for="address">Apartment address:</label>
                    <input required maxlenght="254" type="text" class="form-control" name="address" id="address" aria-describedby="text" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="country">Country:</label>
                    <input required maxlenght="254" type="text" class="form-control" name="country" id="country" aria-describedby="text" placeholder="Enter country">
                </div>
                <div class="form-group">
                    <label for="city">City:</label>
                    <input required maxlenght="254" type="text" class="form-control" name="city" id="city" aria-describedby="text" placeholder="Enter city">
                </div>
                <input type="submit" name="submit" value="Register an appartment!" style="background-color: #BDE198;" class="btn w-100 mt-4">
            </form>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>