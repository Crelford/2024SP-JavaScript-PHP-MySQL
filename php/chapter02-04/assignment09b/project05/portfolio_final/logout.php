<?php
session_start();
session_destroy();
header('location:http://localhost/2024SP/php/portfolio_final/login.php');
?>