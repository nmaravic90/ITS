<?php
include "config.php";

konekcija();

if(isset($_GET['id']) ){

$id = $_GET['id']; 
$query = mysql_query("insert into korpa(id,slika, opis, cena) 
		 select *
		 from akcije where id=".$id);
header("Location:../index.php");
//echo "<meta http-equiv='refresh'  content='0; url=../php/korpa_sve.php'>";
//echo "<meta http-equiv='refresh' content='0; url=../php/korpa.php'>";
}


?>