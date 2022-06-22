<?php
include "php/config.php";


function akcija(){
konekcija();
$query = "select * from akcije order by id";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result)){

	$id = $row['id'];
	$slika = $row['slika'];
	$opis = $row['opis'];
	$cena = $row['cena'];

	
	
	echo 	"<div class='product'>";
	echo 	"<img src='$slika' width='280' height='140' />";
	echo	"<p> $opis </p>";
	echo	"<font color='blue'>Cena:</font> $cena e";
			if(isset($_SESSION['username']) && $_SESSION['username']!="admin"){
	echo	"<a href=php/dodaj_u_korpu.php?id=$id><button class='button'>Dodaj u korpu</button></a></p>";
			}
			else if(isset($_SESSION['username']) && $_SESSION['username']=="admin") { 
	echo "<a href=php/brisi_racunar2.php?id=$id><button class='button'>Izbaci racunar</button></a>";
	echo "<a href=izmeni_racunar2.php?id=$id><button class='button'>Izmeni</button></a>";
	}
	echo	"</div>";
			
}
}
?>