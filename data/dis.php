<?php

// include "db.php";

// if(count($_POST)>0) {
//     $name=$_POST["name"];

//     $result = mysqli_query($conn," SELECT * FROM student ");
    
//     }
    // $result = mysqli_query($con," SELECT * FROM student ");

$host = "localhost";
$username = "root";
$password = "";
$database = "demo";

$conn = mysqli_connect($host,$username,$password,$database);
$sql_query = "SELECT * FROM student ";
$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$data_records = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
	$data_records[] = $rows;
}

?>
<?php
if(isset($_POST["export"])) {	
	$filename = "demo_data_export_".date('Ymd') . ".pdf";			
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	$is_coloumn = false;
	if(!empty($data_records)) {
	  foreach($data_records as $value) {
		if(!$is_coloumn) {		 
		  echo implode("\t", array_keys($value)) . "\n";
		  $is_coloumn = true;
		}
		echo implode("\t", array_values($value)) . "\n";
	  }
	}
	exit;  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            table, tr,td {
                border: 1px solid black;
            }
</style>
</head>
<body>
    <div>
    <div class="well-sm col-sm-12">
		<div class="btn-group pull-right">	
			<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">					
				<button type="submit" id="export" name='export' value="Export to excel" class="btn btn-info">Export to excel</button>
			</form>
		</div>
	</div>		
<table>
<tr>

    <td>Roll No</td>
    <td>Name</td>
    <td>Email</td>

</tr>
<?php
// $i=0;
// while($row = mysqli_fetch_array($resultset)) 
// {
    
     foreach($data_records as $record) { 
?>
<tr>
<td><?php echo $record["roll_no"]; ?></td>
<td><?php echo $record["f_name"]; ?></td>
<td><?php echo $record["email"]; ?></td>
</tr>

<?php
    // $i++;
}
?>
</div>
</table>
</body>
</html>