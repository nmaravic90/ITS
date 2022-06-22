<!DOCTYPE html>
<?php
include 'php/prijava.php'; 
include "php/komponente.php";
?>
<html>
	<head>
        <title>PC shop | computer store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" CONTENT="PC,shop,desktop,racunari,kupi">
        <meta name="description" CONTENT="PC shop, desktop racunari">
        <link rel="shortcut icon" href="images/ikonica.ico"><!--DODAVAJNE IKONICE-->
        <link rel="stylesheet" type="text/css"  href="css/style.css">
        <script type="text/javascript" src="js/validacije.js"></script>
	</head>
<body>
	<div id="header">
		<div class="header-blok1">
		     <img src="images/logo.png" alt="logo" height="60" wight="120">

		</div>
		<div class="header-blok2">
			<div id="meni">
				<ul>
                    <li><a href="index.php" title="">AKCIJE</a></li>
                    <li><a href="racunari.php" title="">RACUNARI</a></li>
                    <li><a href="konfigurator.php" title="">KONFIGURATOR</a></li>
                    
                </ul>
			</div>			
		</div>
	</div>
	<div id="tools">
		<ul>
                    <li>
                     <?php
                    if(isset($_SESSION['username']) && $_SESSION['username']!="admin"){
                     echo "<a href='korpa.php'>Korpa</a>";
                        }
                     ?>
                    </li>
                    <li>
                    <?php
                    if(isset($_SESSION['username']) && $_SESSION['username']=="admin"){
                     echo "<a href='dodaj-proizvod.php'>Dodaj racunar</a>";
                        }
                     ?>


                        </li>
                    <li>
<?php
    if(isset($_SESSION['username'])){
    echo"<a href='php/logout.php' title=''>Odjavi se( $_SESSION[username])</a>";}
    else {
    echo"<a href='login.php' title=''>Prijavi se</a>";}

                        ?>




                        
        </ul>
    </div>
	<div id="body">
        <form method="post" action="php/komponente-u-korpu.php">
		<table id="tabela-konfigurator" cellspacing="20">
            <caption><h1>IZABERI KOMPONENTE</h1></caption>
            <tr id="prvi-red">
                <td>Vrsta proizvoda</td>
                <td>Naziv proizvoda</td>
                <td>Cena</td>
            </tr>

            <tr>
            <td>Procesor(CPU):</td>
            <td>
                <select id="cpu" name="cpu" onChange="CPU()" onclick="sum()">
                <option>Izaberi komponentu!</option>
                <?php cpu(); ?>;
                </select>
            </td>
            <td>
                Cena: <input type="text" id="cenaCPU" readonly/>       
            </td>
            
            </tr> 
            
            <tr>
            <td>Maticna ploca:</td>
            <td>
                <select id="mboard" name="mboard" onChange="MB()" onclick="sum()">
                <option>Izaberi komponentu!</option>
                <?php mboard(); ?>
                </select>
            </td>
            <td>Cena: <input type="text" id="cenaMB" readonly/></td>
            </tr>
            
            <tr>
                <td>Hard disk:</td>
                <td>
                    <select id="hard" name="hard" onChange="HDD()" onclick="sum()">
                    <option>Izaberi komponentu!</option>
                    <?php hard(); ?>
                    </select>
                </td>
                <td>Cena: <input type="text"  id="cenaHDD" readonly/></td>                    
            </tr>                        
                                 
            <tr>
                <td>Ram memorija:</td>                     
                <td>
                    <select id="ram" name="ram" onChange="RAM()" onclick="sum()">
                    <option>Izaberi komponentu!</option>
                    <?php ram(); ?>
                     </select>
                </td>
                <td>Cena: <input type="text"  id="cenaRAM" readonly/></td>
            </tr>  
            
            <tr>
                <td>Graficka kartica:</td>
                <td>
                    <select id="gcard" name="gcard" onChange="GCARD()" onclick="sum()">
                    <option>Izaberi komponentu!</option>
                    <?php gcard(); ?>
                    </select>
                </td>
                <td>Cena: <input type="text"  id="cenaGCARD" readonly/></td>
            </tr>  
            
            <tr>
                <td>Kuciste:</td>
                <td>
                    <select id="box" name="box" onChange="BOX()" onclick="sum()">
                    <option>Izaberi komponentu!</option>
                    <?php box(); ?>
                    </select>
                </td>
                <td>Cena: <input type="text"  id="cenaBOX" readonly/></td>
            </tr>  
            
            <tr>
                <td>Napajanje:</td>
                <td>
                    <select id="napon" name="napon" onChange="NAPON()" onclick="sum()">
                    <option>Izaberi komponentu!</option>
                    <?php napon(); ?>
                     </select>
                </td>
                <td>Cena: <input type='text'  id='cenaNAPON' readonly ></td>
            </tr> 
                              
            <tr id="poslednji-red">
                <td colspan="2">Ukupno: </td>
                <td>Cena: <input type="text" name ="cena" id="cena" readonly/></td>
            </tr>
            <tr>
                <td colspan="3" id="poslednji-red" align="center">
                    <textarea rows="5" cols="110" name="komponente" id="komponente" readonly></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="3" id="poslednji-red" align="center">
                <?php
                if(isset($_SESSION['username']) && $_SESSION['username']!="admin")
                {
         echo"<input  type='submit' class='button' name='ubaci' value='Ubaci u korpu'/>";
        echo" <input  type='reset' class='button' name='reset' value='Odustani'/>";
                }?>
                </td>
            </tr>  
        </table>
</form>
</div>
	<div id="footer">
		<div id="footer01">
			<div class="footer-blok">
				 <table id="social-network">
                        <caption>Pratite nas:</caption>
                        
                            <td>FACEBOOK</td>
                            <td><a href="https://www.facebook.com"><img src="images/fb.png" width="30px" height="30px"/></a></td>
                        
                        <tr>
                            <td>YOUTUBE</td>
                            <td><a href="https://www.youtube.com"><img src="images/youtube.png" width="30px" height="30px"/></a></td>
                        </tr>
                        <tr>
                            <td>PINTEREST</td>
                            <td><a href="https://www.pinterest.com"><img src="images/pinterest.png" width="30px" height="30px"/></a></td>
                        </tr>
                        
                    </table>
			</div>
			<div class="footer-blok">
				<form name="mejl" action="php/mail.php" method="POST" onSubmit="return formValidatorMail();">
                    <table>
                        <tr>
                            <td>Naslov:</td>
                            <td><input type="text" name="naslov"/></td>
                        </tr>
                         <tr>
                            <td>Ime i prezime:</td>
                            <td><input type="text" name="ime_i_prezime"/></td>
                        </tr>
                         <tr>
                            <td>Mail:</td>
                            <td><input type="text" name="mail" /></td>
                        </tr>
                        <tr>
                            <td>Poruka:</td>
                            <td><textarea rows="8" cols="22" name="poruka" ></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="reset" class="button" name="odustani" value=" Odustani " /></td>
                            <td><input type="submit" class="button"  name="posalji" value=" Posalji "/></td>
                        </tr>
                    </table>
                  </form>
				
			</div>
			<div class="footer-blok">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d181139.85118476648!2d20.4203223!3d44.8152453!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2srs!4v1439660548619" width="293" height="215" frameborder="0" style="border:0">
				 </iframe>
			</div>
		</div>
	</div>


</body>
</html>