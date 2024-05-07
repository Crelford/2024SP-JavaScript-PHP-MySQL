<?php

/*

Class: SP191SP-01
Your Name:
Date:

*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with JavaScript</title>
</head>
<body>
<article>
    <h2>International Space Station Images</h2>
    <div id="gallery"></div>
</article>
<?php
$caps = array();
$sids = array();
$names = array();

// Database credentials
$servername = "localhost";  // Change this if your MySQL server is running on a different host
$username = "Crelford";          // Change to the newly created user
$password = "SPJan2024!";              // Change to new user password
$database = "web19101";      // Change this to the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // Proceed with your database operations here
    $cmd = "SELECT a.caption_id, a.caption, b.last_name " .
           "FROM captions a " .
           "INNER JOIN authors b ON a.author_id = b.author_id"; 
           
    $result = mysqli_query($conn, $cmd);
    // Fetch data and store in arrays
    while ($row = mysqli_fetch_assoc($result)) {
        list($id, $cap, $name) = array_values($row);
         $ids[] = $id; 
        $caps[] = $cap; 
        $names[] = $name;
    }

    // Free result set
    mysqli_free_result($result);
}
?>
<h2>Captions Table</h2>
<table>
    <thead>
        <tr>
            <th>Number</th>
            <th>Caption</th>
            <th>ID Number</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Loop through the caps array and display each item in a table row
        for ($i = 0; $i < count($caps); $i++) {           
        echo "<tr>";  
         echo "<td>$ids[$i]</td>"; 
         echo "<td>$caps[$i]</td>";           
         echo "<td>$names[$i]</td>";           
          echo "</tr>";
        }
        mysqli_close($conn);
        ?>
    </tbody>
</table>
</body>
</html>
