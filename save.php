<?php
include("base.php");
$knowed = mysql_query("INSERT INTO knowed_words SET user_id = $_SESSION[user_id], word_id = $_POST[word_id]");
					if (!$knowed) {
						die('Query failed: ' . mysql_error());
						
					}

echo "Saved!"; 
?>