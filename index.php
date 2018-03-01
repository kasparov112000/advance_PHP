<!DOCTYPE html>
<html>
<body>
<div> Table of links of a CMS website table </div>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
if (file_exists(__DIR__ . '/MyDB.php'))
{
	include_once __DIR__ . '/MyDB.php';
}

// Create connection
$conn = new Db();
 

// Check connection
//if ($conn->error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 

$sql = "SELECT title, alias, url FROM jos_weblinks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> title: ". $row["title"] . " - alias: ". $row["alias"]. " " . $row["url"] . "<br>";
    }
} else {
    echo "0 results";
}


?> 

</body>
</html>