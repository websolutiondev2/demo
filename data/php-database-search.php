<?php
// error_reporting(0);
// $conn = mysqli_connect("localhost","root","","demo");
// if(count($_POST)>0) {
// $roll_no=$_POST[roll_no];
// $result = mysqli_query($conn,"SELECT * FROM student where roll_no='$roll_no' ");

// }

include "db.php";

// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "demo";

// $conn = mysqli_connect($host,$username,$password,$database);
// if(!$conn)
// {
//     die('Could not Connect My Sql:' .mysql_error());
// }
if(count($_POST)>0) {
    $name=$_POST["name"];

    $result = mysqli_query($con," SELECT * FROM student where f_name LIKE '%$name%' OR email LIKE '%$name%' OR roll_no LIKE '%$name%' ");
    
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
<table>
<tr>

    <td>Roll No</td>
    <td>Name</td>
    <td>Email</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
    
?>
<tr>
<td><a href="dis.php"><?php echo $row["roll_no"]; ?></a></td>
<td><a href="dis.php"><?php echo $row["f_name"]; ?></a></td>
<td><a href="dis.php"><?php echo $row["email"]; ?></a></td>
</tr>

<?php
    $i++;
}
?>
</div>
</table>
</body>
</html>