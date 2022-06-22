<?php
include 'config.php';



if(isset($_POST['izmeni'])){
konekcija();

$id = $_POST['id']; 
$slika = $_POST['slika'];
$opis = $_POST['opis'];
$cena = $_POST['cena'];

$query = mysql_query("UPDATE racunari set slika='images/racunari/$slika', opis='$opis', cena='$cena' where id='$id'");

header("Location:../racunari.php");

}
?>