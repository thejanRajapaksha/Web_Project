<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
    echo "Connection is OK";
}
else{
    echo "Connection failed".mqsqli.error();
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['youremail'];
$message = $_POST['message'];


$query = "INSERT INTO contactus VALUES('','$firstname','$lastname','$email','$message')";
$data = mysqli_query($con,$query);

 
if($data)
{
    //echo "Data is send";
    header("location:contact.html");
}
else{
    echo "Data is not send";
}
 


?>