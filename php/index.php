<!DOCTYPE html>
<?php 
include 'php/prijava.php'; 
include 'php/akcije.php';



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
        

        <link rel="stylesheet" type="text/css"  href="css/jquery.bxslider.css">
        <script type="text/javascript" src="js/jquery.js" ></script>
        <script type="text/javascript" src="js/jquery.bxslider.js" ></script>
        <script type="text/javascript" src="js/script.js" ></script>




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
                     //echo $_SESSION['br'];                      
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
                        </li>
        </ul>
    </div>

               
	<div id="body">


                 <div class="slider">
                    <div class="slide"><img src="images/slajd/slajd1.jpg" alt="" /></div>
                    <div class="slide"><img src="images/slajd/slajd2.jpg" alt="" /></div>
                    <div class="slide"><img src="images/slajd/slajd3.jpg" alt="" /></div>
                </div>




		<div id='body-products'>
            <h1 align="center">AKCIJE</h1>
                <?php  akcija();?>
		</div>
			
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

