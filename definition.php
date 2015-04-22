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

		<!-- Entire Canvas -->
		<div class="container-fluid">
			
			
			<div class="row">
				<!-- WORD + PRONUNCIATION GUIDE -->
				<div class="col-md-6 text-center vocab-word">
					<h1><?php echo $word['Word']; ?></h1><h3>[<?php echo $word['Pronunciation']; ?>]</h3>
				</div>	
				<!-- IMAGE -->
				<div class="col-md-6 text-center picture">
					<img src="images/<?php echo $word['Slug']; ?>.jpeg" alt="<?php echo $word['Word']; ?>" height="200" />
				</div> 
				<!-- AUDIO -->
				<div class="col-md-6 text-center audio">
					<audio src="mp3/<?php echo $word['Slug']; ?>.mp3" alt="<?php echo $word['Word']; ?>" controls height="200" />
				</div>
			</div>
			<div class="row">
				<!-- I CAN SAY IT! *SAVE BUTTON* -->
				<div class="col-md-6 text-center learning-data">
					<form class="form-inline" role="form" action="save.php" method="post">
						<input type="hidden" name="word_id" value="6">
							<label><input type="checkbox" name="said" value="1"> I can say it!</label><button type="submit" class="btn btn-default said-it">save</button>
					</form>
				</div>
			</div>
			<div class="row">
				<!-- BUTTONS - WORDS & NEXT! -->
				<div class="col-md-3 button-left"><a href="words.php?unit=<?php echo $unit['Slug'] ?>" class="btn btn-primary btn-lg active" role="button">&larr; WORDS</a></div>
				<?php
					if ($nextWord) {
						echo "<div class=\"col-md-3 button-right\"><a href=\"definition.php?word=$nextWord[Slug]\" class=\"btn btn-primary btn-lg active\" role=\"button\">NEXT! &rarr;</a></div>";
				}
			?>
			</div>
		</div>
	
    
		