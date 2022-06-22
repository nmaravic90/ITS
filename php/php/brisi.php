<?php
include 'config.php';

konekcija();

if(isset($_GET['id']) ){


$id = $_GET['id']; 
$query = mysql_query("delete from korpa where id=".$id);
header("Location:../korpa.php");
//echo "<meta http-equiv='refresh' content='0; url=../korpa.php'>";

}
?>