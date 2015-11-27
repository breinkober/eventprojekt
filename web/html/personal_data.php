<?php 
var_dump('haha');
?>
<html lang="de">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title>Personal Data</title>
  </head>
  <body>
    <header>
	</header>
	<main class="container">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <p>Persönliche Daten</p>
	  </div>
	  <div class="panel-body">
	  <form action="" method="post">
	    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><p>Vorname: <input type="text" value="<?php echo $vorname ?>" class="form-control" name="firstname" placeholder="Vorname"/></p></div>
	    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><p>Nachname: <input type="text" value="<?php echo $nachname ?>"  class="form-control" name="lastname" placeholder="Nachname"/></p></div>
	    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><p>Straße: <input type="text" value="<?php echo $strasse ?>"  class="form-control" name="street" placeholder="Straße"/></p></div>
	    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><p>PLZ: <input type="text" value="<?php echo $plz ?>"  class="form-control" name="zip_code" placeholder="PLZ"/></p></div>
	    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><p>Ort: <input type="text" value="<?php echo $ort ?>"  class="form-control" name="zip_code" placeholder="Ort"/></p></div>
	  </form>
	  </div>
	</div>
	<a class="btn btn-default">Next</a>
	</main>
	<footer>
	</footer>
  </body>
</html>