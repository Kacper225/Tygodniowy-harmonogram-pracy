<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>

<body>
	
<?php

	echo "<p>Witaj ".$_SESSION['imie'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	echo "<p><b>Imie</b>: ".$_SESSION['imie'];
	echo " | <b>Nazwisko</b>: ".$_SESSION['nazwisko']."</p>";
	
?>

</body>
</html>