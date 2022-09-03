<?php
include('connect.php');
session_start();
$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
echo $name,$email,$message;
$sql= "INSERT INTO `contact`(`user_id`, `name`, `email`, `message`) VALUES ('', '$name', '$email', '$message')";
$data= mysqli_query($conn,$sql);
if ($data) 
{
	echo "<script>alert('Thank you for your support!')</script>";
	echo "<script>window.location.href='duplicateindex.php'</script>";
}
else
{
	echo "Not Inserted";
}
?>