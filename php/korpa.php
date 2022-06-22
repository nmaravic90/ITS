<!DOCTYPE html>
<?php
include "php/korpa_sve.php"; 
include "php/suma-korpe.php";

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
    </head>  
<body>
        <a href="index.php" align="right"><h1>nazad</h1></a>

        <?php
            if(isset($_GET['poruka'])==1)
                {
                    echo '<font color="red"><h4 align="center">Uspesno ste narucili proizvode!</h4></font>';
                }
        ?>

        <table class="table-korpa" cellspacing="20">
            <caption><h1>KORPA</h1></caption>
            
            <tr class="row">
                
                <td>Slika</td>
                <td>Opis</td>
                <td>Cena</td>
                <td>Brisi</td>
            </tr>
            
             
            <?php 

            korpa_racunari(); 
            

            ?>
            <tr class="row">
              <td colspan="4"> <?php suma(); ?></td>
            </tr>
        </table>
         <div class="div-row" >
                <a href="naruci.php"><button class='button2'>NARUCI</button></a>
            </div>
    </body>
</html>

