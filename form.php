<?php
$servername="localhost";
$username="admin12";
$passwords="123456789";
$dbname="feedbackformdata";

$conn=new mysqli($servername,$username,$passwords,$dbname);

if($conn->connect_error){
    die("Connection failed" .$conn->connect_error);
}

// Databse Create 
// $sql="CREATE DATABASE feedbackformdata";
// Table Create 
// $sql="CREATE TABLE studentfeedback(
//     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     teachername VARCHAR(30) NOT NULL,
//     coursename VARCHAR(30) NOT NULL,
//     subjectname VARCHAR(30) NOT NULL,
//     lecture VARCHAR(30) NOT NULL,
//     treatedstudent VARCHAR(6) NOT NULL,
//     lecturetiming VARCHAR(20) NOT NULL,
//     teacherregular VARCHAR(15) NOT NULL,
//     taughtlecture VARCHAR (20) NOT NULL,
//     aboutlecture VARCHAR(100) NOT NULL,
//     additionalcomment VARCHAR(100) NOT NULL,
//     rating BIGINT(10) NOT NULL
// )";

// INSERT DATA

$teachername=$_POST['teacher'];
$coursename=$_POST['course'];
$subjectname=$_POST['subject'];
$lecture=$_POST['nature'];
$Treated=$_POST['Treated'];
$lecturetiming=$_POST['minutes'];
$regular=$_POST['regular'];
$taughtlectures=$_POST['understood'];
$aboutlecture=$_POST['fav_language'];
$comment=$_POST['comment'];
$rating=$_POST['hidden_value'];

// echo $rating;

$sql="INSERT INTO studentfeedback(teachername,coursename,subjectname,lecture,treatedstudent,lecturetiming,
teacherregular,taughtlecture,aboutlecture,additionalcomment,rating)
VALUES('$teachername','$coursename','$subjectname','$lecture','$Treated','$lecturetiming',
'$regular','$taughtlectures',
'$aboutlecture','$comment','$rating')";
if($conn->query($sql)===True){
     header("location:studentfeedbackform.html");
}else{
    echo "Data not created";
}

$conn->close();
?>