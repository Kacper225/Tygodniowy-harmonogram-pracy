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
<link rel="Stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>

<body>
	
<?php
echo '<a href="logout.php"><div style="float:right; background: radial-gradient(circle, rgba(93,9,121,1) 0%, rgba(2,0,36,1) 100%); width:100px; height:30px; text-align:center; inline-height:30px; border-radius:10px; color:white;">Wyloguj się</div></a>';
	echo '<br>';
	echo $_SESSION['imie'];
	echo "<b> </b>".$_SESSION['nazwisko']."</p>";
	
?>
<div>
	<table>
		<tr>
			<th>Company</th>
			<th>Company</th>
			<th>Company</th>
			<th>Company</th>
			<th>Company</th>
		</tr>
		<tr>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
		</tr>
		<tr>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
		</tr>
		<tr>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
		</tr>
		<tr>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
		</tr>
		<tr>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
		</tr>
		<tr>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
		</tr>
		<tr>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
			<td>Alfreds Futterkiste</td>
		</tr>

	</table>
</div>


</body>
</html>