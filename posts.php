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
        echo '<div class="card text-left bg-secondary" style="color: #1bff1f; padding-left: 10px; padding-right: 10px; padding-bottom: 15px;"> <p> Posted By: ' . $row["author"]. '<br>Date: ' . date("d-m-y",$row["dateposted"]) .'</p> <hr> <div class="card-body text-left" style="background-color: black; border-radius: 15px;"> <p>' . $row["post"]. '</p></div></div><hr>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
