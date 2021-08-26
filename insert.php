<?php
include "connection.php";

if($conn){
	$newuser = $_POST["newuser"];
	// $newuser = "Cazzone";
	$thequery = "CREATE TABLE $newuser(
  `id` int(11) NOT NULL,
  `giorno` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `moneyexit` int(11) NOT NULL,
  `causale` varchar(100) NOT NULL
)";
	
	
$newquery = mysqli_query($conn, $thequery) or die ("impossibile creare tabella  $newuser " . mysqli_error($conn));
if($newquery){
	$query_2 = "INSERT INTO alltables(nometabella) VALUES ('$newuser')";
	$newquery_2 = mysqli_query($conn, $query_2) or die ("problemi inserimento $newuser 	utente in tabella singola fallito ");
	if($newquery_2){
		echo "inserito nuovo utente " . $newuser;
	}
	
}
      }else{
 echo "problemi di connessione " . mysqli_error($conn);
}