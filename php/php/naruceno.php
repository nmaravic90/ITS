<?php
include 'config.php';

konekcija();

if(isset($_POST['potvrdi'])){


 
$query = mysql_query("delete from korpa");
header("Location:../korpa.php?poruka=1");
}

?>