<?php
$name = $_GET['term'];
$name = "%$name%";
$conn = mysqli_connect('localhost', 'root', '', 'open_review');
$sql = "SELECT * FROM employer WHERE employer.company_name LIKE ?";
$statement = $conn->prepare($sql);
$statement->bind_param('s', $name);
$statement->execute();
$result = $statement->get_result();
$autocompleteResult = array();
if (! empty($result)) {
    while ($row = $result->fetch_assoc()) {
        $autocompleteResult[] = $row["title"];
    }
}
print json_encode($autocompleteResult);
?>