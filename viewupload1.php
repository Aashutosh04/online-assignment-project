<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'login');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$sql = "SELECT * FROM `upload2`";
$result = mysqli_query($connection, $sql);
?>


<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Size</th>
      <th>Type</th>
      <th>Location</th>
    </tr>
  </thead>
  <tbody>
  <?php
  	while($r = mysqli_fetch_assoc($result)){
   ?>
    <tr>
      <td><?php echo $r['name'] ?></td>
      <td><?php echo $r['size'] ?></td>
      <td><?php echo $r['type'] ?></td>
      <td><a href="<?php echo $r['location'] ?>">View</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>