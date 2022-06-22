<?php
include 'config.php';
session_start();

if(isset($_POST['potvrdi'])){


$name = $_POST['ime'];
$pass = $_POST['sifra'];

if($name && $pass)
{
	konekcija();
	$query = mysql_query("select * from login where username = '$name' and pass = '$pass' ");

	$rows = mysql_num_rows($query);
	if($rows!=0)
        {

		while ($row = mysql_fetch_assoc($query))
		{
			$ime = $row['username'];
			$sifra = $row['pass'];
		}

		if($name == $ime && $pass == $sifra)
		{
			$_SESSION['username']=$ime;
			
			header("Location:../index.php");
			
		}
		else echo " niste se ulogovali";
	}
	else 
        {
        header("Location:../login.php?error=1");   
        }
}
else echo "Unesite korisnicko ime i sifru!";}
?>