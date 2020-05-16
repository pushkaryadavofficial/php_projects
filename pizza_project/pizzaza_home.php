
<?php 
	include('config/db_connect.php');
	//write query for all pizzas
	$sql = 'SELECT title,ingredients,id FROM pizzas ORDER BY created_at';

	//make query and get result
	$result = mysqli_query($conn,$sql);
	//fetch resulting rows as array
	$pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC);

	//free result from memory
	mysqli_free_result($result);

	//close connection
	mysqli_close($conn);
	// print_r($pizzas);
	// print_r(explode(',', $pizzas[0]['ingredients']));
	//use : in starting of loop and end_____ at end ogf loop ____ stands for what you are using eg: foreach 
 ?>
<?php include 'template/header.php'; ?>
<h4 class="center grey-text">Pizzas</h4>
<div class="container">
	<div class="row">
		<?php foreach ($pizzas as $pizza) : ?>
			<div class="col s6 md3">
				<div class="card z-depth-0">
					<img src="images/pizza_218px_231px.jpg" class="pizza" alt="">
					<div class="card-content center">
						<h6>
							<?php echo htmlspecialchars($pizza['title']); ?>
						</h6>
						<ul>
							<?php foreach (explode(',', $pizza['ingredients']) as $ingredient) : ?>
								<li><?php echo htmlspecialchars($ingredient); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="card-action right-align"><a href="details.php?id=<?php echo $pizza['id']; ?>" class="brand-text">More info</a></div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>	
	<?php if(count($pizzas) >= 2): ?>
			<p>there are two or more pizzas</p>
		<?php else: ?>
			<p>there are less then two pizzas</p>
		<?php endif; ?>		
</div>

<?php include 'template/footer.php'; ?>
</html>