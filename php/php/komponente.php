<?php 
include "php/config.php";

konekcija();

function cpu(){
$query = "select  cena, naziv from cpu";
$result = mysql_query($query);


while ($row = mysql_fetch_array($result))
{
	
    echo "<option value='$row[cena]'> $row[naziv] </option>";

}

}

function mboard(){
$query = "select cena, naziv from mboard";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
    
    echo "<option value='$row[cena]'> $row[naziv] </option>";

}
}

function hard(){
$query = "select cena, naziv from hard";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
    
    echo "<option value='$row[cena]'> $row[naziv] </option>";

}
}

function ram(){
$query = "select cena,naziv from ram";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
    
    echo "<option value='$row[cena]'> $row[naziv] </option>";

}
}

function gcard(){
$query = "select cena, naziv from gcard";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
    
    echo "<option value='$row[cena]' name='$row[naziv]'> $row[naziv] </option>";

}
}

function box(){
$query = "select cena, naziv from box";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
    
    echo "<option value='$row[cena]'> $row[naziv] </option>";

}
}

function napon(){
$query = "select cena, naziv from napon";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result))
{
    
    echo "<option value='$row[cena]'> $row[naziv] </option>";

}
}



?>