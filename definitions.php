<?php
// Connecting, selecting database
$link = mysql_connect('127.0.0.1', 'root', 'password')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('garces-vent1') or die('Could not select database');

// Performing SQL query
$query = "SELECT * FROM words WHERE Slug = \"$_GET[word]\"";
//print_r($query);
$result = mysql_query($query) or die('Query failed: ' . mysql_error()) ;

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PARK</title>

		<!-- Bootstrap -->
		<link href="../../css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"><a href="index.html" class="btn btn-primary btn-lg active" role="button">&larr; WORD LIST</a></div>
				<div class="col-md-6 text-center"><h1>PARK</h1></div>
				<div class="col-md-3"><a href="museum.html" class="btn btn-primary btn-lg active" role="button">NEXT ONE! &rarr;</a></div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<img src="images/park.jpeg" alt="park" height="200" />
				</div> 
				<div class="col-md-6 text-center">
					<p>[parc]</p>
					<audio src="audio/park.mp3" alt="park" controls height="200" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">	
					<label><input type="checkbox"> I get it!</label>
				</div>
				<div class="col-md-6 text-center">	
					<label><input type="checkbox"> I can say it!</label>
				</div>
			</div>
		</div>
	
    
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://code.jquery.com/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../../js/bootstrap.min.js"></script>
	</body>
</html>
