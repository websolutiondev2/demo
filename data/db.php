<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "demo";

$con = mysqli_connect($host,$username,$password,$database);
if(!$con)
{
    die('Could not Connect My Sql:' .mysql_error());
}
else
{
    // echo "DB connected";
}

?>