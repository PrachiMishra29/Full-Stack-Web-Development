<?php
include('config.php');
 ?>

<html>
<head>
  <title>REcords</title>
</head>
<style media="screen">
  table, th, td {
border: 1px solid black;
border-collapse: collapse;
}
</style>
<body>



<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if($result -> num_rows > 0)
{
  ?>
  <table style="width:50%">
    <thead>
<tr>
  <th>Id</th>
  <th>Name</th>
  <th>Age</th>
  <th>Contact</th>
  <th>Email</th>
</tr>
    </thead>
    <tbody>
      <?php
      while($data = $result->fetch_assoc()){ ?>
<tr>
  <td><?php echo $data['id'];?></td>
  <td><?php echo $data['name'];?></td>
  <td><?php echo $data['age'];?></td>
  <td><?php echo $data['contact'];?></td>
  <td><?php echo $data['email'];?></td>
</tr>
<?php } ?>
    </tbody>

<?php
}
 ?>
</table>
</body>
</html>
