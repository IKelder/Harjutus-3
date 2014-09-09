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
	<h2>Arvud</h2>
	<?php 
		$arv1 = 1;
		$arv2 = 2;
		echo ($arv1 * $arv2);
		echo "<br>";
	?>
	<?php abs(2); ?>
	<?php
    // Viis ruudus:
    echo pow(5, 2);
    echo "<br>";

    // Seitse kuubis:
    echo pow(7, 3);
    echo "<br>";

    // Kolm astmel seitse:
    echo pow(3, 7);
    echo "<br>";
?>
<?php
    // Ruutjuur 25-st:
    echo sqrt(25);
    echo "<br>";
?>
<?php
    // Suvaline number
    echo rand();

    // Suvaline number vahemikus 7 - 22:
    echo rand(7, 22);
    echo "<br>";
?>
<h3>Numbrite kasvatamine ja kahandamine</h3>
<?php
    $sample_nr = 45;
?>
<?php
  $sample_nr = 45;
  $sample_nr = $sample_nr + 5;
  echo $sample_nr;
  echo "<br>";
?>
<?php
    $sample_nr2 = 45;
    $sample_nr2 += 5;
    echo $sample_nr2;
    echo "<br>";
?>
<?php
    $sample_nr2 = 45;
    $sample_nr2 += 5;
    echo $sample_nr2;
?>
<?php
    $sample_nr3 = 45;
    $sample_n3 *= 5;
    echo $sample_nr3;

    $sample_nr2 = 45;
    $sample_nr2 /= 5;
    echo $sample_nr2;
?>
<h3>Numbri ja stringi liitmine</h3>
<?php
    echo 5 . " teksapüksid";
    echo "<br>";
?>
<?php
    echo 5 + " teksapüksid";
    echo "<br>";
?>
<?php
    echo 5 + "5";
    echo "<br>";
?>
<?php
    echo 5 + "7 teksapüksi";
?>
</body>
</html>