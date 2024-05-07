<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
/*

Class: SP191SP-01
Your Name:Chamille Relford
Date: 04/11/2024

*/
$firstName = _GET['firstname'];
$lastName = $_GET['lastname'];
echo 'Welcome to our website, ' .
  htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
  htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
?>