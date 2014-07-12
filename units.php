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
	<div class ="level">
    	<h1>Level 1</h1>
    </div>
    
    <table class="table table-bordered table-hover">
  <tbody>
    <tr>
      <th>Unit</th>
      <th>Title</th>
    </tr>
    	<?php while ($unit = mysql_fetch_assoc($result)) {  
    		echo "<tr>";
    			echo "<td>$unit[ID]</td>";
				echo "<td><a href=\"words.php?unit=$unit[Slug]\">$unit[Title]</a></td>";
			echo "</tr>";	
			}	   
		mysql_free_result($result);
		?>
	</tbody>
</table>
	
    
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>


