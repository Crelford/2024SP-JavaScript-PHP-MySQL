<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

session_start();
$username=$_POST['username'];
$password=$_POST['password'];

// Database credentials
$servername	= "localhost";		// Change this if your MySQL server is running on a different host
$database	= "web19101";		// Change this to the name of your database if necessary

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn)
{
	$_SESSION['username']=$username;
	header('location:http://localhost/2024SP/php/portfolio_final/home.php');
	
}
else
{
	header('location:http://localhost/2024SP/php/portfolio_final/login.php');
}
?>