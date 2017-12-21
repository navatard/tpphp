<?php 

include "user.php";

$user = new User;

if ($_POST["email"] == $user->get_email() && $_POST["password"] == $user->get_password()){ 

	session_start();
	$_SESSION['email'] =  $user->get_email();
	$_SESSION['nom'] =  $user->get_nom();
	$_SESSION['prenom'] =  $user->get_prenom();
	$_SESSION['password'] =  $user->get_password();

	header("location:dashboard.php");

 }else{ 

	header("location:error.php");

 } ?>
	  