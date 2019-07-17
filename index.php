<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
  <title>Fallout 13: A New Dawn</title>
    <nav class="navbar navbar-expand-lg" role="navigation">
    <ul class="nav nav-tabs">
      <li class="nav-item">
      <a class="navbar-brand" href="#">F13 A.N.D</a>
      </li>
  <li class="nav-item">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
  </li>
  <li class="nav-item">
            <a class="nav-link" href="faq.html">FAQ</a>
  </li>
  <li class="nav-item">
        <a class="nav-link" href="about.html">About Us</a>
  </li>
  <li class="nav-item">
        <a class="nav-link" href="https://discord.gg/Hs9ch87">Discord</a>
  </li>
</ul>
</nav>
  </head>
  <div class="container bg-dark">
  <body>

    <div class="row">
  <div class="col-sm-4">
    <img src="images/pip.png" alt="">
  </div>
  <div class="col-sm-8">
    <div class="jumbotron bg-dark" style="color: #1bff1f;">
      <h1>News</h1>
      <br><br>
      <?php include('posts.php') ?>
    </div>
  </div>
</div>

  </body>
    </div>

</html>
