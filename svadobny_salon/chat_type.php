<?php session_start(); //použijeme pre uloženie mena ?>
<br><br>
<form action="msg_write.php" method="post">
Meno: <input type="text" name="meno" <?php if(isset($_SESSION['meno'])){echo('value="' . $_SESSION["meno"] . '" ');} ?> > Správa: <input type="text" name="sprava"><input type="submit" value="Pošli !">
</form>
