<?php
include 'config.php';

if(isset($_POST['potvrdi'])){

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$korisnickoime = $_POST['korisnicko_ime'];
$sifra = $_POST['sifra'];

if($korisnickoime && $ime && $prezime && $sifra)
{
konekcija();

$query = mysql_query("select * from login where username = '$korisnickoime'");

$rows = mysql_num_rows($query);
	if($rows!=0)
        {

		while ($row = mysql_fetch_assoc($query))
		{
			$username = $row['username'];
			
		}

		if($korisnickoime == $username)
		{
                  
                  header("Location:../register.php?error=1");
			
		}
		
	}
        else
        {
         
            $query1 = mysql_query("insert into login (ime, prezime, username, pass)
                   values( '$ime', '$prezime','$korisnickoime','$sifra')");
            
            
            header("Location:../login.php?poruka=1");
            
            
        }
}
        else echo 'Morate uneti sva polja!';
}
?>