<?php
include("base.php");
//print_r($_POST);
if ($_POST["knowed"]) {
	$knowed = mysql_query("INSERT INTO knowed_words SET user_id = $_SESSION[user_id], word_id = $_POST[word_id]");
	if (!$knowed) {
		die('Query failed: ' . mysql_error());	
	}

	echo "Saved!"; 
}
 else {
 	$knowed = mysql_query("DELETE FROM knowed_words WHERE user_id = $_SESSION[user_id] and word_id = $_POST[word_id]");
	if (!$knowed) {
		die('Query failed: ' . mysql_error());	
	}

	echo "Deleted :-(";
 }
?>