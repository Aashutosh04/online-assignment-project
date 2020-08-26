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
    $fullname=$_POST['fullname'];
    $rollno=$_POST['rollno'];
    $username=$_POST['username'];
    $emailid=$_POST['emailid'];
    $branch=$_POST['branch'];
    $password= $_POST['password'];

 
$sql = "INSERT INTO abc (fullname, rollno, username, emailid ,branch ,password) VALUES ('$fullname', '$rollno', '$username', '$emailid', '$branch', '$password')";
mysqli_query($conn, $sql);
mysqli_close($conn);
echo "<script>alert('REGISTERED SUCCESSFULLY');</script>";
header("Location: studentlogin.php");
echo "<script>alert('REGISTERED SUCCESSFULLY');</script>";
}
}
?>

<html>
<head>
<script type="text/javascript">
function validate()
      {
      
         if( document.myForm.fullname.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.fullname.focus() ;
            return false;
         }
         
         if( document.myForm.emailid.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.emailid.focus() ;
            return false;
         }
         
         if( document.myForm.rollno.value == "-1" )
         {
            alert( "Please provide your rollno!" );
            return false;
         }

         
         if( document.myForm.username.value == "-1" )
         {
            alert( "Please provide your username!" );
            return false;
         }

         
         if( document.myForm.branch.value == "-1" )
         {
            alert( "Please provide your branch!" );
            return false;
         }

         
         if( document.myForn.password.value == "-1" )
         {
            alert( "Please provide your password!" );
            return false;
         }
         return( true );
      } 
</script> 


    <title> Student Registeration </title>
    <link rel="stylesheet" type="text/css" href="pqr.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Student Registeration </h1>
            <form name="myForm" onsubmit="return(validate());" method="POST" form action="studentreg.php">
            <p>Full Name</p>
            <input type="text" name="fullname" placeholder="Enter Your Full Name" >
            <p>Roll Number</p>
            <input type="number" name="rollno"  placeholder="Enter your Roll Number" >
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" >
            <p>Email ID</p>
            <input type="text" name="emailid" placeholder="Enter your Email ID" >
            <p>Branch</p>
            <input type="text" name="branch" placeholder="Enter Branch" >
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" >
            <input type="submit" name="submit" value="Register">
            

            
            </form>
        
        
</div>
    
    </body>
</html>