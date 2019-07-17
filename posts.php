<?php
require 'config.php';

$mysqli = new mysqli($host, $username, $password, $database);
if($mysqli->connect_error) {
  echo('Error connecting to database');
}
$sql = "SELECT * FROM posts";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<figure class="figure"> <p> Posted By: " . $row["author"]. "   Date: ". $row["dateposted"] ."</p> <p>" . $row["post"]. "</p></figure><hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
