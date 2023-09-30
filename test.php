<?php 
$host = "localhost";
$user = "root";
$pass = "younes";
$db = "form";

$con = new mysqli($host, $user, $pass, $db);
if (!$con){
  echo "somthing is wrong with connection";
}

$name=$_POST['name'];
$age= $_POST['age'];
$msg=$_POST['msg'];

$qry = "INSERT INTO table1 (name, age, message) VALUES ('$name', '$age', '$msg')";
$insert = mysqli_query($con,$qry);
if (!$insert){
  echo "problem!";
}
else{
  echo "slay";
}
?>