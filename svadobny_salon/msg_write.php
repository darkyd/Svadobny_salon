<?php
session_start(); // Slouží pro uložení jména
include('databaze.php'); // includuje soubor s údaji do databáze
$jmeno = mysqli_real_escape_string($conn,$_POST['jmeno']); // Ochrana proti SQL injekci
$zprava = mysqli_real_escape_string($conn,$_POST['zprava']); 

if($jmeno != "" || $zprava != "") // Pokud jméno a zpráva něco obsahuje (není prázdné)
{
mysqli_query($conn,"INSERT INTO `chat`(`jmeno`, `zprava`,`cas`) VALUES ('$jmeno','$zprava',Now())"); // Vloží do databáze... vkládáme pouze do jméno, zpráva a datum, ID se vloží samo
$_SESSION['jmeno'] = $jmeno; // Nastaví jméno
header("Location: chat_type.php"); // Vrátí se zpět k psaní zprávy
}
else // Pokud je něco prázdné
{
header("Location: chat_type.php"); // Vrátí se zpět k psaní zprávy
}
?>