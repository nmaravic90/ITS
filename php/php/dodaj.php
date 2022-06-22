<?php
include 'config.php';
//session_start();

if(isset($_POST['ubaci'])){


$slika = $_POST['slika'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];
$radio = $_POST['dugme'];


if($radio=='akcije'){

if($slika && $opis && $cena)
{
	konekcija();
	$query = mysql_query("insert into akcije(slika, opis, cena) 
		 values( 'images/racunari/$slika', '$opis','$cena')");

	header("Location:../dodaj-proizvod.php?poruka=1");
	
	
}
else echo "Morate popuniti sva polja!";
}

if($radio=='racunari'){

if($slika && $opis && $cena)
{
	konekcija();
	$query = mysql_query("insert into racunari(slika, opis, cena) 
		 values( 'images/racunari/$slika', '$opis','$cena')");

	header("Location:../dodaj-proizvod.php?poruka=1");
	
	
}
else echo "Morate popuniti sva polja!";
}






}

?>