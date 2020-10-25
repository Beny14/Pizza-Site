<?php

	include('config/db_connect.php');
	// write query for all pizzas
	$sql = 'SELECT id, title, ingredients FROM pizzas ORDER BY create_at';
	// get the result set
	$result = mysqli_query($conn, $sql);
	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// free the $result from memory
	mysqli_free_result($result);
	// close connection
	mysqli_close($conn);

?>

<html>
	<?php include('templates/header.php'); ?>
	<h4 class="center green-text accent-4 text-family-1">Pizza Menu !</h4>
	<div class="container">
		<div class="row">
			<?php foreach($pizzas as $pizza): ?>
				<div class="col s2 m4">
					<div class="card card-box z-depth-5">
						<img src="img/pizza.svg" class="pizza">
						<div class="card-content center card-box-details">
							<h6 class="text-family-1"><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul class="black-text text-family-2">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">More info</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php include('templates/footer.php'); ?>
</html>
