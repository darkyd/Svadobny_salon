<?php
include('databaze.php'); // Includuje údaje pre pripojenie k DB

$vyber = mysqli_query($conn,"SELECT * FROM `chat` ORDER BY `cas` DESC"); // Vybere z tabulky chat, zoradené podľa času
while($radek = $vyber->fetch_assoc()) // Pokiaľ nie je na konci, vyberá správy
{
echo htmlspecialchars($radek['cas'] . " ~ " . $radek['jmeno'] . " ~ " . $radek['zprava']); echo("<br><br>"); // Vypíše správy, htmlspecialchars zakazuje HTML
}
?>

