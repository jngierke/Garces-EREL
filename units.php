<?php
include("base.php");


// Performing SQL query
$query = 'SELECT * FROM units';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Garces EREL Vocabulary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>What do I want to learn?</h1>
    
    <ol>
    
    <?php
    while ($unit = mysql_fetch_assoc($result)) {
		echo "<li><input type=\"checkbox\"> <a href=\"words.php?unit=$unit[Slug]\">$unit[Title]</a></li>";
		
	}
	mysql_free_result($result);
	?>

  		
	</ol>
	
    
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


