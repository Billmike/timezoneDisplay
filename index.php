
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hotel.ng Internship</title>
    <link href="./assets/css/index.css" rel="stylesheet">
  </head>

  <body>
      <header>
        <div class="hotels-header">
          <p class="p-tag">Hotels.ng</p>
        </div>
    </header>
        <main class="timer-body">
        <div class="jumbotron jumbotron-fluid jumbotronImage">
          <h1 class="display-4">Hotels.ng Internship v4</h1>
          <p class="lead">Welcome to now!</p>
        </div>
        <div class="timer">
            <?php 
            date_default_timezone_set('Africa/Lagos');
            echo date("H:i:s");
            ?>
        </div>
        <footer class="text-muted">
      <div class="container footer-text">
        <p>&copy; Michael 2017</p>
      </div>
    </footer>
        </main>
  </body>
</html>
