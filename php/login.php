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
        <a href="index.php" align="right"><h1>nazad</h1></a>

        <form name="login" action="php/prijava.php"  method="POST" onSubmit="return formValidatorLogin();">
            <table class="table" cellspacing="20">
                <caption><h1>Prijavi se</h1></caption>
                <tr>
                    <td>Korisnicko ime:</td>
                    <td><input type="text" name="ime" autofocus /></td>
                </tr>
                <tr>
                    <td>Sifra:</td>
                    <td><input type="password" name="sifra"/></td>
                </tr>
                <tr>
                    <td><a href="register.php">Registracija</td>
                    <td>
                    <input  type="submit" name="potvrdi" class="button" value= "Potvrdi"/>
                    <input  type="reset" name="reset" class="button" value= "Odustani" />
                    </td>
                </tr>

            <tr>
                <?php
                            if(isset($_GET['error'])==1)
                             {
                                 echo '<font color="red"><h4 align="center">Korisnik ne postoji!</h4></font>';
                             }
                             if(isset($_GET['poruka'])==1)
                            {
                                echo '<font color="red"><h4 align="center">Uspesno ste se registrovali!</h4></font>';
                            }


                ?>
           </tr>

                </table>
        </form>
    </body>
</html>

