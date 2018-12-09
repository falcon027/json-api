<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

$database = "DB_Name";
$spalte = "ID_spalte";

$gesucht = $_GET["id"]; // for more security us: $gesucht = $_POST["id"];

$pdo = new PDO('mysql:host=localhost;dbname= ', '', '');
$sql = "SELECT * FROM `".$database."` WHERE `".$spalte."` LIKE '".$gesucht."'";
foreach ($pdo->query($sql) as $prid) {}

$product_arr = array(
        "id" => $prid[0],
        "Name" =>utf8_encode($prid[1]),
        "Beschreibung" => utf8_encode($prid[2]),
        "Beschreibung1" => utf8_encode($prid[3])
  );

  print_r(json_encode($product_arr));
  
  ?>
