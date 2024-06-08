<!DOCTYPE html>
<html lang="en">

<head>
    <title>Glassmorphism login Form Tutorial in html css</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #061f50;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(
                #d5e3fc,
                #23a2f6);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right,
                #fb5331,
                #f69814);
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        .button {
            margin-top: 35px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
        }

        .social div {
            background: red;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            background-color: rgba(255, 255, 255, 0.27);
            color: #eaf0fb;
            text-align: center;
        }

        .social div:hover {
            background-color: rgba(255, 255, 255, 0.47);
        }

        .social .fb {
            margin-left: 25px;
        }

        .social i {
            margin-right: 4px;
        }
    </style>
</head>

<body>
    <?php
    $alert_message = "";
$servername="localhost";
$username="admin12";
$passwords="123456789";
$dbname="feedbackformdata";
$conn=new mysqli($servername,$username,$passwords,$dbname);
if($conn->connect_error){
  die("Failed".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Email=$_POST["email"];
    $pass_word=$_POST["pass"];
    $sql="SELECT * FROM registers";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
     if($Email=="admin@gmail.com" && $pass_word=="admin"){
      header("location:admin.html");
     }else if($row["Email"]==$Email && $row["Passwords"]==$pass_word){
      header("location:../main project/feedbackform.html");
     }else{
        $alert_message = "Invliad email and password please write email and password";
     }
  }
}else{
  echo "no data";
}
$conn->close();
}

// echo $pass_word;
// $sql="CREATE TABLE registers(
//   id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   Names VARCHAR(20) NOT NULL,
//   Email VARCHAR(40) UNIQUE,
//   Passwords VARCHAR(20) NOT NULL,
//   Gender VARCHAR(5) NOT NULL
// )";
// $sql="SELECT FROM * registers;
// $result=$conn->query($sql)
// if(num->rows>0){
//   while($row=$result->fetch_assoc()){
//      echo ".$row["Email"]";
//   }
// }else{
//   echo "Not Data Insert";
// }

?>
<?php if (!empty($alert_message)) : ?>
    <script>alert("<?php echo $alert_message; ?>");</script>
<?php endif; ?>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="email" required="">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="pass" required="">

        <input type="submit" value="Login" class="button">
       <button class="button" id="register" onclick="myfunction()">Register</button>
    </form>
    <script>
        function myfunction(){
            location.href="register.html";
            console.log("Hi")
        }
    </script>
</body>

</html>