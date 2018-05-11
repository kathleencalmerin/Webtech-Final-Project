<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
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
			<h2>You're Done !</h2>
			<p>Congratulations ! You have completed the test</p>
			<p>Final Score: <?php echo $_SESSION['score'] ?> / <?php echo $total ?></p>
			<a href="question.php?n=1" class="start">Take Again</a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, PHP Quizzer
		</div>
	</footer>
</body>
</html>
<?php session_destroy(); ?>﻿