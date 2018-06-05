<?php
include('databaza.php'); // Includuje údaje pre pripojenie k DB

$vyber = mysqli_query($conn,"SELECT * FROM `chat` ORDER BY `cas` DESC"); // Vyberie z tabuľky chat, zoradené podľa času
while($riadok = $vyber->fetch_assoc()) // Pokiaľ nie je na konci, vyberá správy
{
echo htmlspecialchars($riadok['cas'] . " ~ " . $riadok['meno'] . " ~ " . $riadok['sprava']); echo("<br><br>"); // Vypíše správy, htmlspecialchars zakazuje HTML
}
?>

