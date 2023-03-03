<?php
$pol= mysqli_connect("localhost","root","","zadanie") or die ('Brak polaczenia z serwerem');
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$rozpoczecie=$_POST['rozpoczecie'];
$zakonczenie=$_POST['zakonczenie'];
$dzien=$_POST['dzien'];

$dodaj_dane=mysqli_query($pol,"INSERT INTO `terminarz`(`imie`, `nazwisko`, `rozpoczecie`, `zakonczenie`, `dzien`) VALUES ('$imie','$nazwisko','$rozpoczecie','$zakonczenie','$dzien')");
header('Location: zalogowano.php');
?>