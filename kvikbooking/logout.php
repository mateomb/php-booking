<?php
include("nav.php");
include("database.php");
$db = new ApartmentsDatabase();
$db->connect();
$db->logout();
?>