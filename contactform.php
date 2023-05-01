<?php


//data contactformulier
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

//data mail functie

    $mailTo = "ttheunis@live.be";
    $headers = "From: ".$mailFrom;
//    \n\n zorgt voor enter
    $txt = "Jaimy je hebt een nieuw bericht ontvangen van ".$name.".\n\n".$message;

//    functie php voor mail (3 parameters -- mail / onderwerp / tekst
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}