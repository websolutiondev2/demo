<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "demo";

$conn = mysqli_connect($host,$username,$password,$database);
$sql_query = "SELECT * FROM employee ";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$data_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
	$data_records[] = $rows;
}
?>