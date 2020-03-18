<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'cse2020';
$conn= mysqli_connect($hostName, $userName, $password, $databaseName);

if ($conn){
    echo '';
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>
