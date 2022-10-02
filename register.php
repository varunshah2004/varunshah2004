<?php
	include('connect.php');
	//include('C:\xampp\htdocs\admin\register.html');
	//include('C:\xampp\htdocs\admin\login.html');

if(isset($_POST['sub'])){

  if(!empty($_POST['username']) || !empty($_POST['password'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `users`(`username`,`password`) VALUES('$username','$password')";

  $result=mysqli_query($conn,$sql);

  if($result){
    header ('location:ADMINPANEL.html');
  }

  else{
  	print_r(mysqli_error($conn));
    die(mysqli_error($conn));
  }

 }
}

?>