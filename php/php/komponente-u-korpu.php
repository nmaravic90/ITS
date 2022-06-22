<?php
include 'config.php';

if(isset($_POST['ubaci'])){




$cena = $_POST['cena'];

$opis =$_POST['komponente'] ;

konekcija();
	$query = mysql_query("insert into korpa(slika, opis, cena) 
		 values( 'images/racunari/20.png', '$opis</br>','$cena')");
	echo "<meta http-equiv='refresh' content='0; url=../konfigurator.php'>";


}
?>