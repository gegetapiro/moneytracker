<?php
include "connection.php";
$i = 0;
if ($conn) {
    $query = "SELECT nometabella FROM alltables";
    $result =   mysqli_query($conn, $query);
    if (!$result) {
    		echo "non va";
    	}else{
    		$rows = array();
    		while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
    			array_push($rows, $row);
    		}
    		
    	echo json_encode($rows);

      
        
    }
}
?>