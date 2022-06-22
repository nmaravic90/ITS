<!DOCTYPE html>
<?php include 'php/config.php'; ?>
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
        <a href="racunari.php" align="right"><h1>nazad</h1></a>

       
        <table class="table-korpa" cellspacing="20">
            <caption><h1>Izmeni</h1></caption>
            
            <tr class="row">
                <!-- <td>ID</td>-->
                <td>Slika</td>
                <td>Opis</td>
                <td>Cena</td>
                
            </tr>
            <tr class='row-product'>
            <?php
            konekcija();

            if(isset($_GET['id']))
            {
                $x = $_GET['id']; 
                $query = mysql_query("select * from racunari where id=".$x);
                while ($row = mysql_fetch_array($query))
                {
                $id=$row['id'];
                $slika = $row['slika'];
                $opis = $row['opis'];
                $cena = $row['cena'];

                      
            echo "
                <form action='php/izmeni.php' method='POST'>
                <input type='hidden' name='id' value='$id'/>
                <td>
                <img src='$slika' width='280' height='140' />
                <input  type='file' name='slika'/>
                </td>
                <td><textarea rows='8' cols='22' name='opis'>$opis</textarea></td>
                <td><input type='text' value='$cena' name='cena'/></td>
                <tr>
                    <td colspan='4' align='center'>
                    
                        <input class='button' type='submit' name='izmeni' value='Izmeni'/>
                   
                    </td>
                </tr>
                </form>
            ";}
        }
        ?>
            </tr>
             
        </table>
         
    </body>
</html>

