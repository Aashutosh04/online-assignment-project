<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'option');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$sql = "SELECT * FROM `opt`";
$result = mysqli_query($connection, $sql);
?>


<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Comments</th>
    </tr>
  </thead>
  <tbody>
  <?php
  	while($r = mysqli_fetch_assoc($result)){
   ?>
    <tr>
      <td><?php echo $r['name'] ?></td>
      <td><?php echo $r['email'] ?></td>
      <td><?php echo $r['phone'] ?></td>
      <td><?php echo $r['comments'] ?></td>

    </tr>
    <?php
    }
    ?>
  </tbody>
</table>