<?php session_start(); //použijeme pre uloženie mena ?>
<br><br>
<form action="msg_write.php" method="post">
<input type="text" name="jmeno" <?php if(isset($_SESSION['jmeno'])){echo('value="' . $_SESSION["jmeno"] . '" ');} ?> > <input type="text" name="zprava"><input type="submit" value="Pošli !">
</form>
