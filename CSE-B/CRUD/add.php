<?php
include('config.php');
 ?>

<html>
<head>
  <title>Input Form</title>
</head>
<body>
  <form action="addrecord.php" method="post">
    Name:<input type="text" name="username">
    <br>
    Age: <input name="age", type="text", placeholder="Enter Age"><br>
    Contact: <input name="contact", type="text", placeholder="Enter Contact"><br>
    Email: <input name="email", type="text", placeholder="Enter Email"><br>
    <input type="submit" name='btn'>
  </form>
</body>
</html>
