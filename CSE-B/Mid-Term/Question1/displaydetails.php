<?php include('config.php'); ?>

<html>
<head>
<title>Records</title>
</head>
<style media="screen">
  table, th, td {
border: 1px solid black;
border-collapse: collapse;
border-style: dashed;
}
</style>
<body>

<?php
$sql = "SELECT * FROM `details`";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>
<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Enrollment No</th>
            <th>Age</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Contact</th>
            <th>E-Mail</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($data = $result->fetch_assoc()){ ?>
    <tr>
      <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['enrollment']; ?></td>
        <td><?php echo $data['age']; ?></td>
          <td><?php echo $data['course']; ?></td>
            <td><?php echo $data['branch']; ?></td>
        <td><?php echo $data['contact']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><a href="edit.php?id=<?php $data['id'];?>">Edit</a></td>
        <td><a href="delete.php?id=<?php $data['id'];?>">Delete</td>
    </tr>
    <?php } ?>
    </tbody>

<?php } ?>
</table>
</body>
</html>
