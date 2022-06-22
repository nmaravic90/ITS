<!DOCTYPE html>
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

        <a href="login.php" align="right"><h1>nazad</h1></a>
        <form name="register"  action="php/registracija.php" method="POST" 
        onSubmit="return formValidatorRegistracija();" >
            <table class="table" cellspacing="20">
                <caption><h1>Registruj se</h1></caption>
                    <tr>
                        <td>Ime:</td>
                        <td><input type="text" name="ime"/></td>
                    </tr>
                    <tr>
                        <td>Prezime:</td>
                        <td><input type="text" name="prezime"/></td>
                    </tr>
                    <tr>
                        <td>Korisnicko ime:</td>
                        <td><input type="text" name="korisnicko_ime"/></td>
                    </tr>
                      <tr>
                        <td>Sifra:</td>
                        <td><input type="text" name="sifra"/></td>
                    </tr>
                    <tr>
                        
                        <td colspan="1"></td>
                        <td>
                            <input  class="button" type="submit" name="potvrdi" value="Registruj se"/>
                            <input class="button" type="reset"  value="Odustani"/>
                        </td>
                            
                    </tr>
                </table>

                <?php
                            if(isset($_GET['error'])==1)
                             {
                                 echo '<font color="red"><h4 align="center">Korisnicko ime vec postoji!</h4></font>';
                             }
                ?>
        </form>
    </body>
</html>

