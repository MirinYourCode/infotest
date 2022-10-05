<?php

require_once('database.php');

$searchTerm = $_GET['term'];
$sql = "SELECT employer.employer_id, employer.company_name FROM `employer` WHERE company_name LIKE '%".$searchTerm."%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $tutorialData = array();
    while($row = $result->fetch_assoc()) {

        $data['id']    = $row['employer_id'];
        $data['value'] = $row['company_name'];
        array_push($tutorialData, $data);
    }
}
echo json_encode($tutorialData);
?>