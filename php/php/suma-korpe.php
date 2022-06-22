<?php
include "config.php";

function suma(){
konekcija();
$query = mysql_result(mysql_query("select sum(cena) from korpa"),0);

echo "UKUPNO:<input type='text' value='$query' readonly/>";

}