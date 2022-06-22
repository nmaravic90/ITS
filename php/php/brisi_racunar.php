<?php
include 'config.php';

konekcija();

if(isset($_GET['id']) ){


$id = $_GET['id']; 
$query = mysql_query("delete from racunari where id=".$id);
header("Location:../racunari.php");


}
?>