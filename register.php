<?php
$servername="localhost";
$username="admin12";
$passwords="123456789";
$dbname="feedbackformdata";


$conn=new mysqli($servername,$username,$passwords,$dbname);
if($conn->connect_error){
  die("Failed".$conn->connect_error);
}

$Names=$_POST['names'];
$Email=$_POST['email'];
$pass_word=$_POST['pass'];
$Gender=$_POST['gender'];
// echo $Gender;
// $sql="CREATE TABLE registers(
//   id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Names VARCHAR(20) NOT NULL,
//   Email VARCHAR(40) UNIQUE,
//   Passwords VARCHAR(20) NOT NULL,
//   Gender VARCHAR(5) NOT NULL
// )";
$sql="INSERT INTO registers(Names,Email,Passwords,Gender)
VALUES('$Names','$Email','$pass_word','$Gender')";

// $sql="UPDATE registers SET Gender='Male'Where id=2";
if($conn->query($sql)==true){
   header("location:login.php");
}
else{
  echo "No table create ";
}
$conn->close();
?>