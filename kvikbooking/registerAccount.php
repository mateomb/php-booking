<?php
include("database.php");
$db = new ApartmentsDatabase();
$db->connect();
$conn = $db->getConn();
$db->authenticate();
if(!$conn){
    die("Failed to connect to database: ".mysqli_connect_error());
}
if(isset($_POST['submit'])){
    if(!empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO kvikusers(email, username, password) values ('$email', '$username', '$password')";

        $run = mysqli_query($conn, $query);
        header('Location: ./index.php');
    }
}
?>