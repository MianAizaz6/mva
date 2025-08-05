<?php

$dbservername1 = "107.180.119.64";
$dbUsername1 = "leads_user";
$dbPassword1 = "Insurance_leads12";
$dbName1 = "insurance";
// $connection = mysqli_connect($dbservername1, $dbUsername1, $dbPassword1, $dbName1);
$connection = mysqli_connect('localhost', 'root', '', 'insurance');

if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}

// $dbservername2 = "198.12.247.154";
// $dbUsername2 = "medi_data";
// $dbPassword2 = "AIL5}uABB2mt";
// $dbName2 = "medicare_data";

// $godaddy_conn = mysqli_connect($dbservername2, $dbUsername2, $dbPassword2, $dbName2) or die('Error in database connection');;

// if (!$godaddy_conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
