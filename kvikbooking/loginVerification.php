<?php
include("database.php");
$db = new ApartmentsDatabase();
$db->connect();
$conn = $db->getConn();

if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM kvikusers WHERE username = '".$username."' and password = '".$password."'";

        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $db->startSession($username);
            header('Location: ./home.php');
        }else{
            header('Location: ./index.php#state');
        }
    }
}
?>