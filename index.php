<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/master.css">
  <title>Fallout 13: A New Dawn</title>
  <nav class="navbar navbar-expand-lg navbar-secondary shadow sticky-top" style="padding: 1rem; position: relative; background: linear-gradient(to bottom, #1d6029, #1d5628, black); padding: 10px;">
    <div class="container">
      <a class="navbar-brand" href="#">Fallout 13: A New Dawn</a>
        <ul class="nav nav-tabs ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item">
                <a class="nav-link" href="faq.html">FAQ</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="about.html">About Us</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="/wiki">Wiki</a>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="events.php">Events</a>
      </li>
    </ul>
    </div>
  </nav>
  </head>
  <div class="container bg-dark">
<body data-spy="scroll" data-target="#pipboy" data-offset="0">
    <div class="row">
  <div class="col-sm-4" id="pipboy">
    <img src="images/pip.png" data-spy="affix" data-offset="0">
    <br><br><br>
    <iframe src="https://discordapp.com/widget?id=583059885881819145&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
  </div>
  <div class="col-sm-8">
    <div class="jumbotron bg-dark" style="color: #1bff1f;">
      <div class="alert alert-success" role="alert">
  <h1>News</h1>
      </div>
      <hr>
      <br><br>
      <?php include('posts.php') ?>
    </div>
  </div>
</div>

  </body>
    </div>

</html>
