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
<link rel="Stylesheet" type="text/css" href="style2.css"/>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>

<body>
	
<?php
echo '<a href="logout.php"><div style="float:right; background: radial-gradient(circle, rgba(200,200,200,1) 0%, rgba(240,240,240,1) 0%, rgba(200,200,200,1) 100%); width:100px; height:30px; text-align:center; inline-height:30px; border-radius:10px; color:black;">Wyloguj się</div></a>';
	echo '<br>';
?>
<p style="color:white; font-size:40px; text-align:center">
	<?php
	echo $_SESSION['imie'];
	echo "<b> </b>".$_SESSION['nazwisko']."</p>";
	?>
</p>



<div class="kalendar">
<div class="calendar">
  
  <header>

      <div class="calendar__title" style="display: flex; justify-content: center; align-items: center">
        <div class="icon secondary chevron_left">‹</div>
        <h1 class="" style="flex: 1;"><span></span><strong>06.03 - 10.03</strong> 2023</h1>
        <div class="icon secondary chevron_left">›</div>
      </div> 
      <div style="align-self: flex-start; flex: 0 0 1"></div>
  </header>
  
  <div class="outer">

  
  <table class="aaa">
  <thead>
    <tr>
      <th class="headcol"></th>
      <th>Poniedziałek</th>
      <th>Wtorek</th>
      <th>Środa</th>
      <th>Czwartek</th>
      <th>Piątek</th>

    </tr>
  </thead>
  </table>

<div class="wrap"> 
  <table class="offset">

  <tbody>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol">8:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol">9:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol">10:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol">11:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol">12:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol">13:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol">14:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol">15:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td class="headcol"></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>


    </tr>
    <tr>
      <td class="headcol">16:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>


  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>














<div class="kalendarr">
<div class="calendarr">
  
  <header>

        <h1 class="" style="flex: 1;"><span></span><strong>Dodaj zadanie</strong></h1>

  </header>
  
  <div class="out">

  


<div class="wraped"> 
  <table class="offsett">

  <tbody>
   
<form action="dodaj.php" method="post">

    <tr>
      <td class="headcols"></td>
      <td>Podaj imie:<br><input type="text" name="imie" required/></td>
      <td>Podaj nazwisko:<br><input type="text" name="nazwisko" required/></td>
    </tr>
    <tr>
      <td class="headcols"></td>
      <td>Rozpoczęcie:<br><input type="time" name="rozpoczecie" required/></td>
      <td>Zakończenie:<br><input type="time" name="zakonczenie" required/></td>
    </tr>
    <tr>
      <td class="headcols"></td>
      <td colspan="2">Dzień rozpoczęcia:<br><input type="text" name="dzien" required/></td>
      
    </tr>
    <tr>
      <td class="headcols"></td>
      <td colspan="2"><button type="submit">Dodaj</button></td>
    </tr>
</form>

  
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>