<?php
include('config.php');
 ?>

<?php
if (isset($_POST['btn'])){
  echo "Data Added Successfully";
$enrollment= $_POST['enrollment'];
$age= $_POST['age'];
$course= $_POST['course'];
$branch= $_POST['branch'];
$contact= $_POST['contact'];
$email= $_POST['email'];

$sql = "INSERT INTO details (enrollment, age, course, branch, contact, email) VALUES ('$enrollment','$age','$course','$branch','$contact','$email') ";
mysqli_query($conn, $sql);
header("Location:displaydetails.php");
}
else
  {
    echo "welcome guest";
  }
?>
