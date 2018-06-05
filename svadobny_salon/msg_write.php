<?php
session_start(); // Slouží pre uloženie mena
include('databaze.php'); // includuje soubor s udajmi do databázy
$jmeno = mysqli_real_escape_string($conn,$_POST['jmeno']); // Ochrana proti SQL injekci
$zprava = mysqli_real_escape_string($conn,$_POST['zprava']); 

if($jmeno != "" || $zprava != "") // Ak meno a správa niečo obsahujú (nesú prázdne)
{
mysqli_query($conn,"INSERT INTO `chat`(`jmeno`, `zprava`,`cas`) VALUES ('$jmeno','$zprava',Now())"); // Vloží do databázy... vkládame iba do meno, správa a dátum, ID se vloží samo
$_SESSION['jmeno'] = $jmeno; // Nastaví meno
header("Location: chat_type.php"); // Vrátí sa späť k pisaniu správy
}
else // ak je niečo prázdne
{
header("Location: chat_type.php"); // Vrátí sa späť k pisaniu správy
}
?>