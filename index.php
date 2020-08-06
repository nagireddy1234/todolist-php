<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "todo_list";

$conn =new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// isset($_POST["fname"]&&$_POST["lname"]){
//   $fname =$_POST["fname"];
//   $lname =$_POST["lname"];
//   if(!empty($fname)&&!empty($lname)){
//     echo $fname. " ". $lname;
//   }else{
//     echo 
//   }
// }

$statement =  'INSERT INTO `name` VALUES ("$_POST["fname"]","$_POST["lname"]")';
$conn->query($statement);
$conn->close();
?>

<form action="/index.php" method="POST" >
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <input type="submit" value="Submit">
</form> 

  
</body>
</html>