<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">My Web App</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.html">Home</a></li>
      <li class="active"><a href="rumus.php">my app</a></li>
    </ul>
  </div>
</nav>
  <form action="" method="post">
    <h1>Rumus Luas Segitiga</h1>
      <div class="form-group">
        <label>Alas:</label>
        <input type="text" class="form-control" name="alas">
      </div>
      <div class="form-group">
        <label>Tinggi:</label>
        <input type="text" class="form-control" name="tinggi">
      </div>
      </div>
        <button type="submit" value="hitung" name="hitung" class="btn btn-default">Hasil</button>
  </form>
<?php
    if (isset($_POST['hitung'])){
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    function luas ($alas,$tinggi) 
            {
    $luas = $alas*$tinggi/2 ;
    echo ("Jadi Luas Segitiga adalah : ".$luas);
                }
    luas($alas,$tinggi);
    }
?>
</body>
</html>