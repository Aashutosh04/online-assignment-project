<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="registration";
//create connection
$conn=new MySQLi($servername,$username,$password,$dbname);

//check the connection
if($conn->connect_error){
die("connection failed".$conn->connect_error);
}
if(isset($_POST['submit'])){
$user=$_POST['username'];
$pass =$_POST['password'];

$sql="select * from xyz where emailid = '".$user."' and password='".$pass."' LIMIT 1";
$result = $conn->query($sql);
if($result->num_rows>0){
header("Location: teacherview.html");
}else{
echo "<script>alert('INCORRECT USERNAME AND PASSWORD');</script>";
}
}

?>
<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="abc.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Teacher Login </h1>
            <form method="post">
            <p>Email ID</p>
            <input type="text" name="username" placeholder="Enter Email Id" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
            <a href="forget1.html">Forget Password</a>    
            </form>
            <p>
                    Not yet a member? <a href="treg.php">Sign up</a>
                </p>
        
        </div>
    
    </body>
</html>
