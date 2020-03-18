<?php
include('config.php');
 ?>

<html>
<head>
  <title>Input Details Form</title>
</head>
<body>
  <form action="addonpage.php" method="post">
    Enrollment No:<input type="number" name="enrollment", placeholder="Enter Enrollment No"><br>
    Age: <input name="age", type="text", placeholder="Enter Age"><br>
    Course: <input name="course", type="text", placeholder="Enter Course"><br>
    Branch: <input name="branch", type="text", placeholder="Enter Branch"><br>
    Contact: <input name="contact", type="text", placeholder="Enter Contact"><br>
    Email: <input name="email", type="text", placeholder="Enter Email"><br>
    <input type="submit" name='btn'>
  </form>
</body>
</html>
