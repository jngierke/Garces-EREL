<?php
include("base.php");
$knowed = die("INSERT INTO knowed_words SET user_id = $_SESSION[user_id], word_id = $word[ID]");
					if (!$knowed) {
						die('Query failed: ' . mysql_error());
					}
?>