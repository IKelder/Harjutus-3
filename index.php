<!DOCTYPE html>
<html>
<head>
	<title>Harjutus 3</title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Muutujad</h1>
	<?php 
		$variable = 20;
		echo "<br>";
	?>
	<?php 
		$variable = 30;
		echo $variable;
	?>
	<h2>Stringid</h2>
	<?php 
		echo "Hello world!";
		echo "<br>";
		echo 'Hello world2!';
		echo "<br>";
	?>
	<?php 
		$number1 = 24;
		$number2 = 26;
		echo "2426";
	?>
	<h2>Nimekirja valjastamine muutujate ja stringide abil</h2>
	<?php 
		$student1 = Anneli;
		$student3 = Eve;
		$student4 = Mihkel;
		$student5 = Frank;
		$firstName = Ingrid;
		$lastName = Kelder;
		$fullName = "$firstName $lastName";
	?>
	<ul>
		<?php 
			echo "<li>" . $student1 . "</li>
			<li>" . $student3 . "</li>
			<li>" . $student4 . "</li>
			<li>" . $student5 . "</li>"
		?>
	</ul>
	<?php 
		echo $fullName;
		echo "<br>";
	?>
	<?php 
		$test = "Mingi tekst";
	?>
	<?php 
		echo "$test ja veel midagi otsa";
	?>
	<?php 
		$age = "15";
		echo "Ma olen {$age}-ne aastane";
		echo "<br>";
	?>
	<?php
		$source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
		$lower = strtolower($source);
		echo "<p>{$lower}</p>";
	?>
	<?php
		$source2 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
		$upper = strtoupper($source2);
		echo "<p>{$upper}</p>";
	?>
	<?php
		$source3 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
		$firstupper = ucfirst($source3);
		echo "<p>{$firstupper}</p>";
	?>
	<?php
		$source3 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
		$firstupper = ucfirst($source3);
		echo "<p>{$firstupper}</p>";
	?>
	<?php
		$source4 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
		$everyupper = ucwords($source4);
		echo "<p>{$everyupper}</p>";
	?>
	<?php
		$source5 = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
		$textlenght = strlen($source5);
		echo "<p>{$textlenght}</p>";
	?>
	<?php echo "A" . trim(" B C D E") . "F"; ?>
</body>
</html>