<?php
include("base.php");

// GET entire row from words table for requested Word (*=entire row)
$result = mysql_query("SELECT * FROM words WHERE Slug = \"$_GET[word]\"") or die('Query failed: ' . mysql_error()) ;
$word = mysql_fetch_assoc($result);
//print_r($word);

// GET entire row from the words table for the next word button 
$result = mysql_query("SELECT * FROM words WHERE UnitID = $word[UnitID] AND Word > \"$word[Word]\" ORDER BY Word");
if (!$result) {
	die('Query failed: ' . mysql_error());
}

$nextWord = mysql_fetch_assoc($result);
//print_r($firstResult);

// GET entire row from the units table for the current word
$result = mysql_query("SELECT * FROM units WHERE ID = $word[UnitID]");
if (!$result) {
	die('Query failed: ' . mysql_error());
}

$unit = mysql_fetch_assoc($result);


$title=$word ['Word'] ;

include("header.php") ; 

?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3"><a href="words.php?unit=<?php echo $unit['Slug'] ?>" class="btn btn-primary btn-lg active" role="button">&larr; WORD LIST</a></div>
				<div class="col-md-6 text-center"><h1><?php echo $word['Word']; ?></h1></div>
<?php
if ($nextWord) {
	echo "<div class=\"col-md-3\"><a href=\"definition.php?word=$nextWord[Slug]\" class=\"btn btn-primary btn-lg active\" role=\"button\">NEXT ONE! &rarr;</a></div>";
}
?>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<img src="images/<?php echo $word['Slug']; ?>.jpeg" alt="<?php echo $word['Word']; ?>" height="200" />
				</div> 
				<div class="col-md-6 text-center">
					<p>[<?php echo $word['Pronunciation']; ?>]</p>
					<audio src="mp3/<?php echo $word['Slug']; ?>.mp3" alt="<?php echo $word['Word']; ?>" controls height="200" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 text-center">
					<form role="form" action="save.php" method="post">
						<input type="hidden" name="word_id" value="<?php echo $word['ID']; ?>"/>
						<label><input type="checkbox"> I get it!</label>
						<button type="submit" class="btn btn-default">save</button>
					</form>
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
