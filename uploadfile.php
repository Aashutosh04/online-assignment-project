<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'login');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
if(isset($_POST['submit'])){
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];
if(isset($name) && !empty($name)){
		$location = "student/";
		if(move_uploaded_file($tmp_name, $location.$name)){
            
            $query = "INSERT INTO `upload` (name, size, type, location) VALUES ('$name', '$size', '$type', '$location$name')";
            $result = mysqli_query($connection, $query);
            echo "<script>alert('UPLOADED SUCCESSFULLY');</script>";
		}else{
			echo "<script>alert('FILE NOT UPLOADED');</script>";
		}
}else{
	echo "<script>alert('SELECT FILE');</script>";
}
}
?>


<html>
<body>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
     
    <link rel="stylesheet" href="styles.css" >
     
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<form action="?" method="POST" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Upload File</h2>
	  <div class="form-group">
	    <label for="InputFile">File input</label>
	    <input type="file" name="file" id="InputFile">
	    <p class="help-block">Upload Assignment File</p>
	  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Upload</button>
        <a href= "studview.html" class ="btn">BACK</a>

      </form>
</body>
</html>