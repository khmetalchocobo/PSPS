<?php
session_start();
require('../../Database/config.php');
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password = md5($password);
$query = "SELECT * FROM tbl_users WHERE user_name='$username' AND user_password='$password' AND active=1";
$results = mysqli_query($db, $query);

if (mysqli_num_rows($results) > 0) {
	$row = $results->fetch_assoc();
	$_SESSION['id']=$row['user_id'];
	$_SESSION['username']=$row['user_name'];
	$_SESSION['type']=$row['user_type'];
	$_SESSION['pic']=$row['picture'];
	echo 'Login';
}

?>