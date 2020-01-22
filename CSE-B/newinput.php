<?php
if (isset($_POST['btn'])){
echo $_POST['id'].'<br>';
echo $_POST['username'].'<br>';
echo $_POST['age'].'<br>';
echo $_POST['contact'].'<br>';
echo $_POST['email'].'<br>';
}
else
  {
    echo "welcome guest";
  }
?>
<html>
<head>
  <title>Input Form</title>
</head>
<body>
  <form action="newinput.php" method="post">
    Id: <input name="id", type="text", placeholder="Enter Id"><br>
    Name:<input type="text" name="username">
    <br>
    Age: <input name="age", type="text", placeholder="Enter Age"><br>
    Contact: <input name="contact", type="text", placeholder="Enter Contact"><br>
    Email: <input name="email", type="text", placeholder="Enter Email"><br>
    <input type="submit" name='btn'>
  </form>
</body>
</html>
