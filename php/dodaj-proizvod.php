<!DOCTYPE html>
<html>
    <head>
        <title>PC shop | computer store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" CONTENT="PC,shop,desktop,racunari,kupi">
        <meta name="description" CONTENT="PC shop, desktop racunari">
        <link rel="shortcut icon" href="images/ikonica.ico">
        <link rel="stylesheet" type="text/css"  href="css/style.css">
    </head>  
<body>

        <a href="index.php" align="right"><h1>nazad</h1></a>

        <form name="dodaj-proizvod" action="php/dodaj.php"  method="POST" >
            <table class="table" cellspacing="20">
                <caption><h1>DODAVANJE RACUNAR</h1></caption>
                    <tr>
                        <td>Dodaj u:</td>
                        <td>
                            
                                <input type="radio" name="dugme" value="racunari">RACUNARI
                                <input type="radio" name="dugme" value="akcije" checked>AKCIJE
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Slika:</td>
                        <td><input  type="file" name="slika"/></td>
                    </tr>
                    <tr>
                        <td>Opis:</td>
                        <td><textarea class="textarea" name="opis"></textarea></td>
                    </tr>
                    <tr>
                        <td>Cena:</td>
                        <td><input type="text" name="cena"/></td>
                    </tr>
                     
                    <tr>
                        
                        <td colspan="1"></td>
                        <td>
                            <input  class="button" type="submit" name="ubaci" value="Ubaci"/>
                            <input class="button" type="reset"  value="Odustani"/>
                        </td>
                            
                    </tr>

                    <tr>
                         <?php
                            if(isset($_GET['poruka'])==1)
                             {
                                 echo '<font color="red"><h4 align="center">Uspesno ste dodali proizvod!</h4></font>';
                             }
                        ?>
                    </tr>

                </table>
        </form>
    </body>
</html>

