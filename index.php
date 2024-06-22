<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];

$gender=$_POST['gender'];
$education=$_POST['education'];

//database connection

$servername = "localhost";
$username = "root";
$password = "Sagar#123";
$database = "test";


$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("Could not connect to server.". mysqli_connect_error());
}
else{
    $sql = "INSERT INTO `form` (`firstname`, `lastname`, `phonenumber`, `email`, `gender`, `education`) VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$gender', '$education')";
    $result = mysqli_query($conn, $sql);
    echo "Successfully inserted";
}


?>