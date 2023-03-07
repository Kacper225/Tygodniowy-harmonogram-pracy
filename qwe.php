<!DOCTYPE HTML>
<html lang="pl">
<head>
<link rel="Stylesheet" type="text/css" href="styl.css"/>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>
<body>
	


<div class="container">

<div class="kalendar">
  
  <header style="display: flex; justify-content: center; align-items: center">
        <div class="icon">‹</div>
        <h1><strong>06.03 - 10.03</strong> 2023</h1>
        <div class="icon">›</div>
  </header>
  
  <table class="aaa">
  <thead>
    <tr>
      <th>Imie</th>
      <th>Nazwisko</th>
      <th>Nazwa</th>
      <th>Data</th>
      <th>Rozpoczecie</th>
      <th>Zakonczenie</th>
    </tr>
  </thead>
  </table>

<div class="wrap"> 
  <table class="offset">

  <tbody>




  <?php
$conn = new mysqli ("localhost", "root", "", "zadanie") or die("błąd");
$wynik = $conn->query("SELECT * FROM terminarz");
while($wiersz = $wynik-> fetch_assoc() ) 
    {
echo "<tr>";
        echo "<td>" . $wiersz["imie"] . "<br>"; 
        echo "<td>" . $wiersz["nazwisko"] . "<br>";
        echo "<td>" . $wiersz["nazwa"] . "<br>";
        echo "<td>" . $wiersz["data"] . "<br>";
        echo "<td>" . $wiersz["rozpoczecie"] . "<br>";
        echo "<td>" . $wiersz["zakonczenie"] . "<br>";
        echo "</tr>";
    }
$conn->close();
?>




  </tbody>
</table>
</div>
</div>






<div class="kall">

  <table class="tab">
<form action="dodaj.php" method="post">
  <tr>
    <td colspan="2" style="font-size:20px">Dodaj zadanie</td>
  </tr>

    <tr>
      <td>Podaj imie:<br><input style="border:1px solid grey; border-radius:3px; margin-top:5px;" type="text" name="imie" required/></td>
      <td>Podaj nazwisko:<br><input style="border:1px solid grey; border-radius:3px; margin-top:5px;" type="text" name="nazwisko" required/></td>
    </tr>

    <tr>
      <td>Rozpoczęcie:<br><input style="border:1px solid grey; border-radius:3px; margin-top:5px;" type="time" name="rozpoczecie" required/></td>
      <td>Zakończenie:<br><input style="border:1px solid grey; border-radius:3px; margin-top:5px;" type="time" name="zakonczenie" required/></td>
    </tr>

    <tr>
      <td>Nazwa zadania:<br><input style="border:1px solid grey; border-radius:3px; margin-top:5px;" type="text" name="nazwa" required/></td>
      <td>Data:<br><input style="border:1px solid grey; border-radius:3px; margin-top:5px;" type="date" name="data" required/></td>
    </tr>

    <tr>
      <td colspan="2"><button class="button_dodaj" type="submit">Dodaj</button></td>
    </tr>
</form>
</table>
</div>

</div>

</body>
</html>