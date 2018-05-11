<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php 
	//Set question number
	$number = (int)$_GET['n'];

	/*
	*  Get Question
	*/
	$query = "SELECT * FROM `questions` WHERE question_number = $number";

	//Get Result of Query
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$question = $result->fetch_assoc();

	/*
	*  Get Choices
	*/
	$query = "SELECT * FROM `choices` WHERE question_number = $number";

	//Get Result of Query
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

	/*
	 * Get Total Number of Questions
	 */
	$query = "SELECT * FROM `questions`";
	//Get Results
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quizzer</title>
	<link rel="stylesheet" type="text/css "href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
			<p class="question">
				<?php echo $question['text'] ?>
			</p>
			<form action="process.php" method="POST">
				<ul class="choices">
					<?php while($row = $choices->fetch_assoc()): ?>
						<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="Submit" />
				<input type="hidden" name="number" value ="<?php echo $number; ?>" />
			</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, PHP Quizzer
		</div>
	</footer>
</body>
</html>