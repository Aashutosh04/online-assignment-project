<?php
$servername = "localhost";
$database = "option";
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
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];

 
$sql = "INSERT INTO opt (name,email,msg) VALUES ('$name', '$email', '$msg')";
mysqli_query($conn, $sql);
mysqli_close($conn);
echo "<script>alert(' SUCCESSFULLY');</script>";
}
}
?>



<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="contusstyle.css">
	</head>
	<body>
	<div class="contact-form">
	<h1> Contact us </h1>
	<div class="txtb">
	<label> Full name :</label>
	<input type="text" name="name" value="" placeholder:" Enter Your Name ">
	</div>
	

	<div class="txtb">
	<label> Email :</label>
	<input type="email" name="email" value="" placeholder:" Enter Your Email ">
	</div>
	
	<div class="txtb">
	<label> Message :</label>
	<input type="text" name="msg" value="" placeholder:" Enter Your Email ">
	</div>
	<input type="submit" name="submit" value="SEND">

	
	

	<p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.669434283394!2d73.12548141479809!3d18.99020098713721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai+College+of+Engineering%2C+New+Panvel!5e0!3m2!1sen!2sin!4v1538298907298" width="400" height="300" align="bottom" frameborder="0" style="border:0" allowfullscreen></iframe> </p>
	</div>
	
	</body>
	</html>
	
	