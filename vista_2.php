<?php

$whatmonth = $_POST["month"];
$whatyear = $_POST["year"];
$whattatable = $_POST["table"];
include "connection.php";


/* $whatmonth = "10";
$whatyear = "2020";
$whattatable = "simona"; */




if ($conn) {

    $queryvista = "SELECT * FROM $whattatable WHERE SUBSTR(giorno, 6, 2) = $whatmonth AND SUBSTR(giorno, 1, 4) = $whatyear";
    if ($result = mysqli_query($conn, $queryvista)) {


        $records = array();


        // echo json_encode ("connection OK<br>");

        if ($result->num_rows > 0) {

            // json_encode($result->fetch_array());


            while ($row = $result->fetch_array()) {
                array_push($records, $row);
            }
            echo json_encode($records);
            /*  for ($i = 0; $i <= $result->num_rows; $i++) {

                echo "->" . $i .  "<-" . $records[$i][0] . " " . $records[$i][1] . " " . $records[$i][2] . " " . $records[$i][3] . " " . $records[$i][4] . " " . $records[$i][5] . "<br>";
            } */
        } else {
            echo json_encode("NO RECORDS");
        }
    } else {
        echo json_encode("connection ERROR");
    }
}
