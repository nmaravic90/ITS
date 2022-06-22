<?php

$subject = $_POST['naslov'];
$name = $_POST['ime_i_prezime'];
$mail = $_POST['mail'];
$text = $_POST['poruka'];

if(isset($_POST['posalji']))
{

    if($subject && $name && $mail && $text)
    {
        $to = 'nidza.nbg@gmail.com';
        
        $naslov = 'Nova poruka';
        
        $email = "NASLOV: " . $subject ."\n". "OD: " . $name ."\n". "MAIL: " . $mail ."\n". "PORUKA: " .$text;
        
        mail($to, $naslov, $email);
        
        echo 'Mail je poslat!';
    }
      //  else  echo 'morate uneti sva polja';
}
?>