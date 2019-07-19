<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<title>Create Post</title>


</head>
<body>
  <script type="text/javascript">
  function CheckType(val){
   var element=document.getElementById('date');
   if(val=='news')
     element.style.display='block';
   else
     element.style.display='none';
  }

  </script>

 <?php
require '../config.php';

$mysqli = new mysqli($host, $username, $password, $database);
if($mysqli->connect_error) {
  echo('Error connecting to database');
}

  if(isset($_POST['save']))
{
    $timestamp = date('m/d/Y');
    $author = $_POST["author"];
    $post = $_POST["post"];
    $type = $_POST["type"];
    $date = $_POST["date"];
    if ($type == "news") {
    $sql = "INSERT INTO posts (id, author, post, dateposted) VALUES (0, '$author', '$post', '$timestamp')";
  } elseif ($type == "event") {
    $sql = "INSERT INTO posts (id, dateposted, details) VALUES (0, '$date', '$post')";
  }
    $mysqli->query($sql);
}
$mysqli->close();
?>

<form action="post.php" method="post">
<label id="author"> Author:</label><br/>
<input type="text" name="author"><br/>
<label id="type">Type of post</label><br/>
<select name="type" onchange='CheckType(this.value);'>
  <option value="news">News</option>
  <option value="event">Event</option>
</select>
<label id="date"> Event Date and Time(Example: 03/20/2019 2:00CST):</label><br/>
<input type="text" name="date"><br/>
<label id="post">Post:</label><br/>
<textarea name="post" id = "post" rows = "40" cols = "100"></textarea>
<br>
<button type="submit" name="save">Post!</button>

</form>

</body>
</html>
