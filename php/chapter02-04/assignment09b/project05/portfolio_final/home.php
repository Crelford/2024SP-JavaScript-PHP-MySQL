<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1); 

session_start();
if(!isset($_SESSION['username']))
	header('location:login.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>My Projects Website</title>
</head>
<body>
<header>
    <h1>My Projects Website</h1>
    <nav>
        <li><a href="https://github.com/acarrin?tab=repositories">About Me</a></li>
        </ul>
    </nav>
</header>
<div id="sidebar">
    <h2>Links</h2>
    <ul>
        <li><a href="https://www.w3schools.com/" target="_blank">W3Schools</a></li>
        <li><a href="https://www.w3schools.com/js/default.asp" target="_blank">JavaScript</a></li>
        <li><a href="https://www.php.net/" target="_blank">PHP</a></li>
        <li><a href="https://github.com/" target="_blank">GitHub</a></li>
        <li><a href="https://dev.mysql.com/doc/refman/8.0/en/" target="_blank">MySQL</a></li>
        <li><a href="https://www.apachefriends.org" target="_blank">Apache Friends</a></li>
		<a href="logout.php">Logout</a>
    </ul>
</div>
<footer>
<p>&copy; 2024 "Replace with Your Own Name" Website. All rights reserved.</p>
</footer>
</div>
<div id="content">
<h2>Welcome to My Projects Website!</h2>
<h2>
<?php
echo "<select onchange='redirectToUrl(this.value)'>";
echo "<option disabled selected>Select a category</option>";
echo "<optgroup label='JavaScript'>";
echo "<option value='javascript/project-1.php'>Project - 1</option>";
echo "<option value='javascript/project-2.php'>Project - 2</option>";
echo "<option value='javascript/project-3.php'>Project - 3</option>";
echo "<option value='javascript/project-4.php'>Project - 4</option>";
echo "</optgroup>";
echo "<optgroup label='MySQL'>";
echo "<option value='mysql/project-1.php'>Project - 1</option>";
echo "<option value='mysql/project-2.php'>Project - 2</option>";
echo "</optgroup>";
echo "<optgroup label='PHP'>";
echo "<option value='http://localhost/2024SP/php/chapter02-04/assignment7/project05/display_captions.php'>Project07 - 5</option>";
echo "<option value='http://localhost/2024SP/php/chapter02-04/assignment09b/project03/display_captions.php'>Project09 - 3</option>";
echo "</optgroup>";
echo "</select>";

// JavaScript function to redirect to URL
echo "<script>";
echo "function redirectToUrl(url) {";
echo "  if (url) {";
echo "    window.location.href = url;";
echo "  }";
echo "}";
echo "</script>";
?>
</h2>
<!--<h2>Hello,<?php echo $_SESSION['username']; ?></h2>
<a href="logout.php">Logout</a>-->
</div>
</body>
</html>