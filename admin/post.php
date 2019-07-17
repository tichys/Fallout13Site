<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Create Post</title>


</head>
<body>

 <?php
require 'config.php';
  if(isset($_POST['save']))
{
    $timestamp = date('d-m-y');
    $sql = "INSERT INTO posts (id, author, post, dateposted)
    VALUES ('""','".$_POST["author"]."','".$_POST["post"]."','"$timestamp"')";

    $result = mysqli_query($conn,$sql);
}

?>

<form action="post.php" method="post">
<label id="author"> Author:</label><br/>
<input type="text" name="author"><br/>

<label id="post">Post:</label><br/>
<input type="text" name="post"><br/>

<button type="submit" name="save">Post!</button>

</form>

</body>
</html>
