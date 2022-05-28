<?php
include("nav.php");
include("database.php");
$db = new ApartmentsDatabase();
$db->connect();
$db->authenticate();
$conn = $db->getConn();
$id = $_GET["id"];
$apartmentID = (int)$_GET['id'];
if (isset($_POST['submit'])) {
    $comment = htmlspecialchars($_POST["comment"]);
    $username = $_SESSION["username"];
    echo $conn->error;
    $query = "select id from kvikusers where username = '$username';";
    echo $conn->error;
    $resultUsers = $conn->query($query);    
    $cringe = mysqli_query($conn, $query);
    if ($resultUsers->num_rows > 0) {
        $rowusers = $resultUsers->fetch_assoc();
        $userID = mysqli_fetch_row($cringe)[0];
        echo var_dump($userID);
        $sql = "INSERT INTO kvikComments(userID, apartmentID, comment) VALUES($userID, $apartmentID, '$comment')";
        $conn->query($sql);
        echo $conn->error;
    }
}
header("Location: description.php?id=$apartmentID");