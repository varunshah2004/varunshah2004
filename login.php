<?php
		
	include('connect.php');
	// include('login.html');

if ($_POST) {
     //print_r($_POST);

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from users where username='$username' and password='$password'";
    //print_r($query);
    $result = mysqli_query($conn, $query);
    //print_r($result);
    $row = mysqli_fetch_assoc($result);
    //print_r($row);
    if ($row) {
        header('location:ADMINPANEL.html?userid='.$row['id']);
    } else {
        /*echo "

        <html>
        <head>
        </head>
        <body>
        <h3 style = 'color: white;'> Sorry Your Are Not Registered With US</h3>
        </body>
        </html>";*/

        header('location:error.html');
    }
    //$row = mysqli_fetch_assoc($result);
    //print_r($row['username']);
} else {
   echo "form method is not post";
}
?>