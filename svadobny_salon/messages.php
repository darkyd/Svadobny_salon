<?php
include('databaze.php'); // Includuje údaje pro připojení k DB

$vyber = mysqli_query($conn,"SELECT * FROM `chat` ORDER BY `cas` DESC"); // Vybere z tabulky chat, seřazeno podle času
while($radek = $vyber->fetch_assoc()) // Dokud není na konci, vybírá zprávy
{
echo htmlspecialchars($radek['cas'] . " ~ " . $radek['jmeno'] . " ~ " . $radek['zprava']); echo("<br><br>"); // Vypíše zprávy, htmlspecialchars zakazuje HTML
}
?>

