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
        <a href="korpa.php" align="right"><h1>nazad</h1></a>

        <form name="naruci" action="php/naruceno.php"  method="POST">
            <table class="table" cellspacing="20">
                <caption><h1>Naruci</h1></caption>
                <tr>
                    <td>Ime i prezime:</td>
                    <td><input type="text" name="ime" autofocus /></td>
                </tr>
                <tr>
                    <td>Adresa:</td>
                    <td><input type="text" name="sifra"/></td>
                </tr>
                <tr>
                    <td>Telefon:</td>
                    <td><input type="text" name="sifra"/></td>
                </tr>
                <tr>
                    
                    <td>&nbsp</td>
                    <td><input  type="submit" name="potvrdi" class="button" value= "Potvrdi"/>
                    <input  type="reset" name="reset" class="button" value= "Odustani" />
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

