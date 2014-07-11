<?php
include("base.php");

//I can say it! *Save Button*
if ($_POST["said"]) {
	$said = mysql_query("INSERT INTO said_words SET user_id = $_SESSION[user_id], word_id = $_POST[word_id]");
	if (!$said) {
		die('Query failed: ' . mysql_error());	
	}

	echo "Saved!"; 
}
 else {
 	$said = mysql_query("DELETE FROM said_words WHERE user_id = $_SESSION[user_id] and word_id = $_POST[word_id]");
	if (!$said) {
		die('Query failed: ' . mysql_error());	
	}

	echo "Deleted :-(";
 }
 

?>