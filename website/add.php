<?php 

	include('config/db_connect.php');

    // initialization to not give an error when loading the page
	$email = $name = $position = '';
	$errors = array('email' => '', 'name' => '', 'position' => '');

    // validating data submitted
	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){     // filter build in php to validate email
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check name
		if(empty($_POST['name'])){
			$errors['name'] = 'A name is required';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $name)){          // creating our custom filter
				$errors['name'] = 'Name must be letters and spaces only';
			}
		}

		// check position
		if(empty($_POST['position'])){
			$errors['position'] = 'A position is required';
		} else{
			$position = $_POST['position'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $position)){
				$errors['position'] = 'Position must be letters and spaces only';
			}
		}

		if(!array_filter($errors)){             // approve that there is no errors (if all elements of array is empty returns false)
			
			// escape sql chars
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$name = mysqli_real_escape_string($conn, $_POST['name']);
			$position = mysqli_real_escape_string($conn, $_POST['position']);

			// create sql
			$sql = "INSERT INTO employees(name,email,position) VALUES('$name','$email','$position')";

			// save to db and check
			if(mysqli_query($conn, $sql)){

				// success
				header('Location: teknoclass.php');

			} else {
				echo 'query error: '. mysqli_error($conn);
			}
			
		}

	} // end POST check

    // htmlspecialchars($var)  is used for prevent XSS attacks

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Employee Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"> 
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Employee name</label>
			<input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
			<div class="red-text"><?php echo $errors['name']; ?></div>
			<label>position</label>
			<input type="text" name="position" value="<?php echo htmlspecialchars($position) ?>">
			<div class="red-text"><?php echo $errors['position']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>