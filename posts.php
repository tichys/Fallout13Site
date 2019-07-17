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
        echo '<div class="card text-left" style="color: #1bff1f; background-color: black; padding-left: 25px;"> <p> Posted By: ' . $row["author"]. '&emsp; Date: ' . date("d-m-Y",$row["dateposted"]) .'</p>  <div class="card-body text-left"> <p>' . $row["post"]. '</p></div></div><hr>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>
