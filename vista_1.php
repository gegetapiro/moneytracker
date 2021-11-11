<?php
$table = $_POST["who3"];
// $table = "chiara";
include "connection.php";
$query = "SELECT * FROM $table";

$result = $conn->query($query);
if ($result) {
    $alldata = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            // echo $row[0][1];
            array_push($alldata, $row);
        }
        // echo "######################";
        echo json_encode($alldata);
    } else {
        echo "errore";
    }
}
