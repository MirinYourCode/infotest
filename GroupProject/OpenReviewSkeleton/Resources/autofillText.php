<?php
require_once "databasre.php";

$pdo = openConnection();

$searchTerm = $_GET['term'];

$query = "SELECT company_name FROM employer WHERE company_name LIKE '%".$searchTerm."%'";
$result = $pdo->query($query);

//return json data
echo json_encode($result);
?>
