<?php
include_once("base.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// This code will run when the page is loaded with a POST request from the form, 
	//		but NOT when the page is initally loaded with a GET request


	// initialize a variable for holding errors as an empty array
	$errors = array();

	// check if first name is provided 
	if (empty($_POST['first_name'])) {
		$errors['first_name'] = 'Oops! You forgot something...';
	} 

	// check if last name is provided
	if (empty($_POST['last_name'])) {
		$errors['last_name'] = 'Oops! You forgot something...';
	} 
	
	// check if username is provided 
	if (empty($_POST['username'])) {
		$errors['username'] = 'Oops! You forgot something...';
	} 

	// check if password is provided
	if (empty($_POST['password'])) {
		$errors['password'] = 'Oops! You forgot something...';
	}
	
	// only proceed with saving to the database if the $errors array is empty
	if (empty($errors)) {
		// escape the user inputs for use inside a MySQL query
		$first_name = mysql_escape_string($_POST['first_name']);
		$last_name = mysql_escape_string($_POST['last_name']);
		$username = mysql_escape_string($_POST['username']);
		$password = sha1($_POST['password']);
		$email = mysql_escape_string($_POST['email']);
		
		// execute MySQL query to insert into table
		mysql_query("INSERT INTO users SET first_name = '$first_name', last_name = '$last_name', username = '$username', password = '$password', email = '$email'") or die('Query failed: ' . mysql_error());
		
		// redirect user to another page and exit
		header("Location: login.php");
		exit();
	}
	
	// if there WERE errors, the rest of the page will load and $errors will be set
}

include("header.php");
?>
	<form name="new_user" method="post">
		
			<?php
				// print out any errors
				
				if (!empty($errors)) {
					echo "<div class='panel panel-danger'>";
					echo 	"<div class='panel-heading'>";
					echo		"<h3 class='panel-title'>There were errors in your form</h3>";
					echo	"</div>";
					echo	"<div class='panel-body'>";
					echo		"<ul>";
					
					foreach ($errors AS $field => $error) {
						echo		"<li>$field: $error</li>";
					}
					
					echo		"</ul>";
					echo	"</div>";
					echo "</div>";
				}
			?>

	
		<div class="form-group">
			<label for="first_name">First Name / Nombre</label>
			<input type="text" name="first_name" class="form-control" placeholder="first name" id="first_name">
		</div>
		<div class="form-group">
			<label for="last_name">Last Name / Apellido</label>
			<input type="text" name="last_name" class="form-control" placeholder="last name" id="last_name">
		</div>
		<div class="form-group">
			<label for="username">Username / Nombre de Usuario</label>
			<input type="text" name="username" class="form-control" placeholder="username" id="username">
		</div>
		<div class="form-group">
			<label for="password">Password / Contraseña</label>
			<input type="password" name="password" class="form-control" placeholder="password" id="password">
		</div>
		<div class="form-group">
			<label for="email">E-Mail</label>
			<input type="text" name="email" class="form-control" placeholder="email" id="email">
		</div>
  		<div class="form-group">
  			<button type="submit" name="Submit" value="submit" class="btn btn-default">Submit</button>
		</div>		
	</form>
	
	<?php 
		include ("footer.php");
	?>