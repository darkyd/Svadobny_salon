<?php
session_start(); // Služí pre uloženie mena
include('databaza.php'); // includuje soubor s udajmi do databázy
$meno = mysqli_real_escape_string($conn,$_POST['meno']); // Ochrana proti SQL injekci
$sprava = mysqli_real_escape_string($conn,$_POST['sprava']); 

if($meno != "" || $sprava != "") // Ak meno a správa niečo obsahujú (nesú prázdne)
{
mysqli_query($conn,"INSERT INTO `chat`(`meno`, `sprava`,`cas`) VALUES ('$meno','$sprava',Now())"); // Vloží do databázy... vkládame iba do meno, správa a dátum, ID sa vloží samo
$_SESSION['meno'] = $meno; // Nastaví meno
header("Location: chat_type.php"); // Vráti sa späť k pisaniu správy
}
else // ak je niečo prázdne
{
header("Location: chat_type.php"); // Vráti sa späť k písaniu správy
}
?>