<?php
include "php/config.php";
//session_start();

function korpa_racunari(){
konekcija();
$query = "select * from korpa order by id";
$result = mysql_query($query);

$br = mysql_num_rows($result);
//$_SESSION['br']=$br;


while ($row = mysql_fetch_array($result)){

	$id = $row['id'];
	$slika = $row['slika'];
	$opis = $row['opis'];
	$cena = $row['cena'];

	
	

	

	echo "
			

			<tr class='row-product'>
				
				<td><img src='$slika' width='280' height='140' /></td>
				<td><p> $opis </p></td>
				<td><p><font color='blue'>$cena e </font></td>
				<td>
				
				<a href=php/brisi.php?id=$id><button class='button'>Brisi</button></a>
				</td>
			</tr>
			
		

		
	";

}


}

?>