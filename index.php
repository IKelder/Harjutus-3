<!DOCTYPE html>
<html>
<head>
	<title>Harjutus 3</title>
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
		$fullName = "$lastName $lastName";
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

</body>
</html>