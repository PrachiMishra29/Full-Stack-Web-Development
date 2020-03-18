<?php
include('config.php');
?>
<?php $id=$_GET['id'];
?>

<?php
    $sql = "SELECT * FROM `details` WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $enrollment = $data['enrollment'];
    $age = $data['age'];
    $course = $data['course'];
    $branch = $data['branch'];
    $contact = $data['contact'];
    $email = $data['email'];
?>

<?php
if(isset($_POST['btn'])){
    $enrollment = $_POST['enrollment'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sql = "UPDATE `details` SET enrollment='  $enrollment', age='$age',course='$course',branch='$branch', contact='$contact', email='$email' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
    }
    else{
        echo "Updation Failed...Try Again";
    }
}
else{
    echo "Please click update button";
}
?>

<html>
    <head>
    <title>Input Form</title>
    </head>

    <body>
    <form action="edit.php?id=<?php echo $id ?>" method="post">
    Enrollment No: <input type="number" name="enrollment" value="<?php echo $enrollment; ?>"><br>
      Age:<input type="text" name="age"  value="<?php echo $age; ?>" placeholder="Enter Age"><br>
      Course:<input type="text" name="course"  value="<?php echo $course; ?>" placeholder="Enter Course"><br>
      Branch:<input type="text" name="branch"  value="<?php echo $branch; ?>" placeholder="Enter Branch"><br>
      Contact:<input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Enter Contact"><br>
      Email: <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter Email"><br>
      <input type="submit" name='btn' value="Update">
    </form>
    </body>
</html>
