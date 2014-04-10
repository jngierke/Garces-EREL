<?php
include("base.php");

if(!$_SESSION['Username']) {
	header("Location: login.php");
	exit();
}

// Performing SQL query
$query = 'SELECT * FROM units';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

include("header.php") ; 

?>
	
    <h1>Garces Foundation EREL Level 1 Vocabulary</h1>
    
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
