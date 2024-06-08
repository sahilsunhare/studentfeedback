<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin feedback data</title>
    <style>
        table{
            border:1px solid black;
        }
        th{
            width:130px;
        }
        tr{
            width:100px;
            text-align:center;
        }
    </style>
</head>
<body>
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

// echo $rating;

// $sql="INSERT INTO studentfeedback(teachername,coursename,subjectname,lecture,treatedstudent,lecturetiming,
// teacherregular,taughtlecture,aboutlecture,additionalcomment,rating)
// VALUES('$teachername','$coursename','$subjectname','$lecture','$Treated','$lecturetiming',
// '$regular','$taughtlectures',
// '$aboutlecture','$comment','$rating')";

$sql="SELECT * FROM studentfeedback";
$result=$conn->query($sql);
 
if($result->num_rows > 0){
    echo "<table><tr>
    <th>TeacherName</th>
    <th>CourseName</th>
    <th>SubjectName</th>
    <th>Lecture</th>
    <th>Treated</th>
    <th>Timing</th>
    <th>Regularity</th>
    <th>TaughtLeacture</th>
    <th>AboutLeacture</th>
    <th>Comment</th>
    <th>Rating</th>
    </tr>";
    while($row = $result->fetch_assoc()){
    $Techername=$row['teachername'];
    echo "<tr><td>".$Techername."</td>";
    $Coursename=$row['coursename'];
    echo "</td><td>".$Coursename."</td>";
    $subjectname=$row['subjectname'];
    echo "</td><td>".$subjectname."</td>";
    $lecture=$row['lecture'];
    echo "</td><td>".$lecture."</td>";
    $Treated=$row['treatedstudent'];
    echo "</td><td>".  $Treated."</td>";
    $lecturetiming=$row['lecturetiming'];
    echo "</td><td>".  $lecturetiming."</td>";
    $regular=$row['teacherregular'];
    echo "</td><td>".  $regular."</td>";
    $taughtlectures=$row['taughtlecture'];
    echo "</td><td>".  $taughtlectures."</td>";
    $aboutlecture=$row['aboutlecture'];
    echo "</td><td>".  $aboutlecture."</td>";
    $comment=$row['additionalcomment'];
    echo "</td><td>".$comment."</td>";
    $rating=$row['rating'];
    echo "</td><td>".  $rating."</td>";
    }

    echo "</tr></table>";

}

$conn->close();
?>
</body>
</html>



