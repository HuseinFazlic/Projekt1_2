<!--
Name: Husein Fazlić
Course: Web Applications Development
Professor: Ali Almisreb
Date: November 24th, 2019
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "questions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM question";
$result = $conn->query($sql);

?>
<html>

<head>
<link rel="icon" href="https://image.freepik.com/free-icon/question-mark_318-52837.jpg" type="image/x-icon">
<link href="projekat1_css.css" type="text/css" rel="stylesheet">
<title>Quiz website</title>
</head>

<body>
	
	<h1 id="greeting">Welcome to the quiz</h1>

	<div class="explanation">
		<p>Check the answer to each multiple-coice question. Then, click on the "Send Form" button to submit your answers.</p>
	</div>

	<?php $row = $result->fetch_assoc(); $prvi = $row["correct_answer"]; ?>
	<div id="first" class="question">
		<img class="question_image" src="<?= $row["image"]?>";>
		<p class="question_text"><?php echo $row["question_id"]. ". " . $row["question_name"]; ?></p>
		<form method="GET" action="checker.php">
			<input type="radio" name="berlin_wall" value="1987" checked><?php echo $row["choice_1"]?><br>
			<input type="radio" name="berlin_wall" value="1989"><?php echo $row["choice_2"]?><br>
			<input type="radio" name="berlin_wall" value="1990"><?php echo $row["choice_3"]?><br>
			<input type="radio" name="berlin_wall" value="1992"><?php echo $row["choice_4"]?><br>
		
		<button id="button-1" class="next" type="button">Next</button>
	</div>
	
	<?php $row = $result->fetch_assoc(); $drugi = $row["correct_answer"]; ?>
	<div id="second" class="question">
		<img class="question_image" src="<?= $row["image"]?>";>
		<p class="question_text"><?php echo $row["question_id"]. ". " . $row["question_name"]; ?></p>
			<input type="radio" name="decade_eiffel" value="1870s" checked><?php echo $row["choice_1"]?><br>
			<input type="radio" name="decade_eiffel" value="1880s"><?php echo $row["choice_2"]?><br>
			<input type="radio" name="decade_eiffel" value="1890s"><?php echo $row["choice_3"]?><br>
			<input type="radio" name="decade_eiffel" value="1900s"><?php echo $row["choice_4"]?><br>
		<button id="button-2" class="next" type="button">Next</button>
	</div>
    
	<?php $row = $result->fetch_assoc(); $treći = $row["correct_answer"]; ?>
	<div id="third" class="question">
		<img class="question_image" src="<?= $row["image"]?>";>
		<p class="question_text"><?php echo $row["question_id"]. ". " . $row["question_name"]; ?></p>
			<input type="radio" name="beethoven" value="Salzburg" checked><?php echo $row["choice_1"]?><br>
			<input type="radio" name="beethoven" value="Bonn"><?php echo $row["choice_2"]?><br>
			<input type="radio" name="beethoven" value="Vienna"><?php echo $row["choice_3"]?><br>
			<input type="radio" name="beethoven" value="Graz"><?php echo $row["choice_4"]?><br>
		<button id="button-3" class="next" type="button">Next</button>
	</div>
	
	<?php $row = $result->fetch_assoc(); $četvrti = $row["correct_answer"]; ?>
	<div id="fourth" class="question">
		<img class="question_image" src="<?= $row["image"]?>";>
		<p class="question_text"><?php echo $row["question_id"]. ". " . $row["question_name"]; ?></p>
			<input type="radio" name="country_fought" value="Castile" checked><?php echo $row["choice_1"]?><br>
			<input type="radio" name="country_fought" value="Brandenburg"><?php echo $row["choice_2"]?><br>
			<input type="radio" name="country_fought" value="Denmark"><?php echo $row["choice_3"]?><br>
			<input type="radio" name="country_fought" value="France"><?php echo $row["choice_4"]?><br>
		<button id="button-4" class="next" type="button">Next</button>
	</div>

	<?php $row = $result->fetch_assoc(); $peti = $row["correct_answer"]; ?>
	<div id="fifth" class="question">
		<img class="question_image" src="<?= $row["image"]?>";>
		<p class="question_text"><?php echo $row["question_id"]. ". " . $row["question_name"]; ?></p>
			<input type="radio" name="krakow" value="Slovakia" checked><?php echo $row["choice_1"]?><br>
			<input type="radio" name="krakow" value="Hungary"><?php echo $row["choice_2"]?><br>
			<input type="radio" name="krakow" value="Poland"><?php echo $row["choice_3"]?><br>
			<input type="radio" name="krakow" value="Czechia"><?php echo $row["choice_4"]?><br>
		<button id="button-5" class="next" type="button">Next</button>
	</div>

	<?php $row = $result->fetch_assoc(); $šesti = $row["correct_answer"]; ?>
	<div id="sixth" class="question">
		<img class="question_image" src="<?= $row["image"]?>";>
		<p class="question_text"><?php echo $row["question_id"]. ". " . $row["question_name"]; ?></p>
			<input type="radio" name="hungary_flag" value="Red blue and yellow" checked><?php echo $row["choice_1"]?><br>
			<input type="radio" name="hungary_flag" value="Red, white and green"><?php echo $row["choice_2"]?><br>
			<input type="radio" name="hungary_flag" value="Green, yellow and white"><?php echo $row["choice_3"]?><br>
			<input type="radio" name="hungary_flag" value="Red, yellow and green"><?php echo $row["choice_4"]?><br>
		<button id="button-6" class="next" type="button">Next</button>
	</div>

	<br>
	<?php $conn->close();?>
	<div id="end">
	<input class="button" type="submit" value="Submit">
	</form>
	</div>
	
	<script type="text/javascript" src="javaskript1.js"></script>
	
	</body>
	
</html>