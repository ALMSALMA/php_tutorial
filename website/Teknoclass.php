<?php 
	include('config/db_connect.php');

	// write query for all pizzas 
	$sql = 'SELECT name, position, id FROM employees ORDER BY created_at';

	// get the result set (set of rows). the result cannot be used so we need to fetch it
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$employees = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

	// print_r($employees);

	// explode(',', $arr['combined_string']); 	// we use this function to split cobined string to elements in array
												// in this example it takes the string before ',' and put it in array

		// 	 foreach(explode(',', $arr['combined_string']) as $string){ 
		// 		echo htmlspecialchars($ing); 
		// 	}
	
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<h4 class="center grey-text">Employees!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($employees as $employee): ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<img src="img/character.svg"class="employee">
							<h6><?php echo htmlspecialchars($employee['name']); ?></h6>
							<div><?php echo htmlspecialchars($employee['position']); ?></div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $employee['id'] ?>">
							more info</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>