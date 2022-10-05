<?php

$hostname = "127.0.0.1";
$database = "open_review";
$username = "root";
$password = "mysql";

$conn = new mysqli($hostname, $username, $password, $database);

$db=mysql_select_db($databasename);

$searchTerm = $_GET['term'];

$select =mysql_query("SELECT * FROM coding_language WHERE name LIKE '%".$searchTerm."%'");
while ($row=mysql_fetch_array($select))
{
    $data[] = $row['name'];
}
//return json data
echo json_encode($data);
?>
