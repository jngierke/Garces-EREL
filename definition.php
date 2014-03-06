<?php
include("base.php");

// Performing SQL query
$query = "SELECT * FROM words WHERE Slug = \"$_GET[word]\"";
//print_r($query);
$result = mysql_query($query) or die('Query failed: ' . mysql_error()) ;
$word = mysql_fetch_assoc($result);
//print_r($word);
$title=$word ['Word'] ;

include("header.php") ; 

?>

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
