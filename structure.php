!DOCTYPE html>
<html>
  <head>
      <title>Assigment 1</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <h1 class="greenish rounded">Unicorns</h1>
    <hr>
    <form class="main-form" action="specificUni.php" method="get">
      <div class="form-group">
        <h4>ID<h5>
        <input type="text" name="search" class="form-control">
        <input type="submit" name="searchBtn" class="btn btn-success" value="Visa Enhörning!">
      </div>
    </form>
    <form class="main-form" action="index.php">
      <div class="form-group">
        <input type="submit" name="searchBtn" class="buttonRounded" value="Show all Unicorns">
      </div>
    </form>
    <hr>
