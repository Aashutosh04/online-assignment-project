<?php
$servername = "localhost";
$database = "registration";
$username = "root";
$pwd = "";

// Create connection

$conn = mysqli_connect($servername, $username, $pwd, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
} else {
 
    echo "success";
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $emailid=$_POST['emailid'];
    $password= $_POST['password'];
    if(strlen($firstname) <=5){
        echo "<script>alert('Firstname should be more than 5 character');</script>";
    }else{

 
$sql = "INSERT INTO xyz (firstname, lastname, username, emailid , password) VALUES ('$firstname', '$lastname', '$username', '$emailid', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('REGISTERED SUCCESSFULLY');</script>";
    header("Location: tlogin.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
}
}
?>

<html>
<head>
    <title> Teacher Registeration </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Teacher Registeration </h1>
            <form method="POST" form action="treg.php">
            <p>First Name</p>
            <input type="text" name="firstname" placeholder="Enter First Name" required>
            <p>Last Name</p>
            <input type="text" name="lastname" placeholder="Enter Last Name" required>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Email</p>
            <input type="text" name="emailid" placeholder="Enter Email" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Register"> 
            

            </form>
        
        </div>
        
    </body>
</html>

