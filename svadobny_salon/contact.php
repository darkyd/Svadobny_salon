<?php include 'header.php'; ?>


<div class="content container">
    <h1 class="shadow">Kontaktujte nás</h1>

    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];
        {
			$to = "david.majercik@gmail.com";
			$subject = 'the subject';
			$message = ("Meno " . $name).
			("Email " . $email).
			("Správa " . $msg). '<br />';
			$headers = 'From: '. $email . "\r\n" .
			'Reply-To: '.$email . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			mail($to, $subject, $message, $headers);
        }
    }
    ?>

    <form action="#" method="post" name="form" class="contact-form">
        <label for="your-name">
            Vaše meno
            <input type="text" id="your-name" name="your-name" />
        </label>

        <label for="your-email">
            Váš e-mail
            <input type="email" id="your-email" name="your-email" />
        </label>

        <label for="your-message">
            Správa
            <textarea id="your-message" name="your-message" cols="40" rows="10"></textarea>
        </label>

        <button class="btn btn-white">Poslať</button>
    </form>
</div>


<?php include 'footer.php'; ?>