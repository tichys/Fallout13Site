<html lang="en" dir="ltr">
<head>
<include src="header.html"></include>
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
