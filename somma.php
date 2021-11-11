<?php
include "datacon.php";
$whattable = $_POST['who2'];

if ($whattable == (string) "all") {
    $total = 0;
} else {

    $connection = mysqli_connect($host, $user, $password, $db);
    $i = 0;
    // $total = 0;
    if ($connection) {
        $thequery = "SELECT moneyexit FROM $whattable";
        $result = mysqli_query($connection, $thequery);


        while ($row = $result->fetch_array()) {
            $total += (int)$row[$i];
        }
        echo json_encode($total);
    }
}
