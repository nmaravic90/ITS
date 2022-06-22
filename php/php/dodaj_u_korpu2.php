<?php
include "config.php";

konekcija();

if(isset($_GET['id']) ){

$id = $_GET['id']; 
$query = mysql_query("insert into korpa(id,slika, opis, cena) 
		 select *
		 from racunari where id=".$id);
header("Location:../racunari.php");

}


?>