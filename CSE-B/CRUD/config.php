<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'css';
$conn= mysqli_connect($hostName, $userName, $password, $databaseName);

if ($conn){
    echo '';
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>
