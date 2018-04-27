<?php 
    $sprava = $_POST['sprava'];
    $email = 'david.majercik@gmail.com';
    $vysledok = mail($email, 'Mail z WWW', $sprava);
    if($vysledok)
        echo 'Správa bola odoslaná'
    else
        echo 'správa nebola odoslaná, nastala chyba'
?>