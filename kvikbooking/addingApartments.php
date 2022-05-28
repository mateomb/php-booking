<?php
include("database.php");
$db = new ApartmentsDatabase();
$db->connect();
$db->authenticate();
$conn = $db->getConn();
if (!$conn) {
    die("Failed to connect to database: " . mysqli_connect_error());
}
if ($db->adminCheck()) {
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $balconies = $_POST['balconies'];
        $rooms = $_POST['rooms'];
        $owner = $_POST['owner'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $city = strtolower($city);

        if (isset($_POST['ac']) && isset($_POST['ac']) == "1") {
            $ac = 1;
        } else {
            $ac = 0;
        }
        if (isset($_POST['parking']) && isset($_POST['parking']) == "1") {
            $parking = 1;
        } else {
            $parking = 0;
        }
        if (isset($_POST['pets']) && isset($_POST['pets']) == "1") {
            $pets = 1;
        } else {
            $pets = 0;
        }
        if (isset($_POST['wifi']) && isset($_POST['wifi']) == "1") {
            $wifi = 1;
        } else {
            $wifi = 0;
        }

        $query = "INSERT INTO kvikApartments(title, description, price, balconies, rooms, owner, address, country, city) 
        values ('$title', '$description', '$price', '$balconies', '$rooms', '$owner', '$address', '$country', '$city')";
        if (mysqli_query($conn, $query)) {
            $last_id = mysqli_insert_id($conn);
            $extra = "INSERT INTO kvikExtra(apartmentID, ac, parking, pets, wifi) 
        values ( $last_id, $ac, $parking, $pets, $wifi)";
            $run = mysqli_query($conn, $extra);
        }

        header('Location: ./home.php');
    } else {
        echo `<p>Unable to post data, please try again<p>`;
    }
}
else{
    header("Location: notAdmin.php");
}