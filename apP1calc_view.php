
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body background='tlo.jpg'>

<form action="<?php print(_APP_URL);?>/apP1calc.php" method="post">
	<label for="id_x">Kwota kredytu </label>
	<input id="id_x" type="text" name="x" value="<?php if(isset($x)) print($x); ?>" /><br />
	
	<label for="id_y">Liczba lat </label>
	<input id="id_y" type="text" name="y" value="<?php if(isset($y)) print($y); ?>" /><br />
	
	<label for="id_z">Oprocentowanie roczne % </label>
	<input id="id_z" type="text" name="z" value="<?php if(isset($z)) print($z); ?>" /><br />
	
	<input type="submit" value="Oblicz ratę kredytu" />
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 30px; padding: 20px 20px 20px 40px; border-radius: 5px; background-color: #ff00ff; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>