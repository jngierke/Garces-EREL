<?php

include("base.php");


// Performing SQL query
$query = "SELECT * FROM units WHERE Slug = \"$_GET[unit]\"";

//print_r($query);
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

$unit = mysql_fetch_assoc($result);
mysql_free_result($result);

// Performing SQL query
$query = "SELECT * FROM words WHERE UnitID = $unit[ID] ORDER BY Word";

//print_r($query);
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

$title=$unit['Title'] ;

include("header.php") ; 
?>
	<div class="unit">
    <h1><?php echo $unit['Title']; ?></h1>
    </div>
    
    <table class="table">
    	<tr>
    		<th scope="col">WORD</th>
    		<th scope="col">I CAN SAY IT!</th>
  		</tr>
  		
  		<?php
		while ($word = mysql_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td><a href=\"definition.php?word=$word[Slug]\">$word[Word]</a></td>";
			echo "<td><input type=\"checkbox\"></td>";
			echo "</tr>";
		}
		
		mysql_free_result($result);
		?>
		
	</table>
	
	<div class="col-md-3 button-left"><a href="units.php" class="btn btn-primary btn-lg active" role="button">&larr; UNITS</a></div>
				<?php
					if ($nextUnit) {
						echo "<div class=\"col-md-3 button-right\"><a href=\"words.php?unit=$nextUnit[Slug]\" class=\"btn btn-primary btn-lg active\" role=\"button\">NEXT! &rarr;</a></div>";
				}
				 
include ("footer.php");
?>
