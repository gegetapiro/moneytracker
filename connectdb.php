<?php

include "datacon.php";
include "connection.php";
$who;
$howmuch;
$causal;


if ($conn) {
    $timestamp = strtotime("now");
    $thisday =  date('d/m/Y H:i:s', $timestamp);

    $who = $_POST["who"];
    $howmuch = $_POST["howmuch"];
    $causal = $_POST["butwhy"];
    $query = "INSERT INTO $who(moneyexit, causale) VALUES ('$howmuch', '$causal')";
    if (mysqli_query($conn, $query)) {
        echo json_encode("pagamento di " . $who . " di " . $howmuch . "€ inserito ");
    } else {
        echo json_encode("error " . mysqli_error($conn));
    }
} else {
    echo json_encode("error " . mysqli_error_list($conn));
}
// echo json_encode("successfully insert visitor: " . $who . " " . $howmuch . " " . $causal);
