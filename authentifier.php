<?php
require 'db.php';
$login=$_POST["username"];
$pass=md5($_POST['password']);
$ps=$connection->prepare("SELECT * FROM users WHERE LOGIN=? AND PASSWORD=?");
$params=array($login,$pass);
$ps->execute($params);
if ($user=$ps->fetch()) {
	session_start();
	$_SESSION['PROFILE']=$user;
	header("location:index.php");
}
else{
	header("location:login.php");
}

?>