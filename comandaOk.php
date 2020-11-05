<?php 
    // Creamos cookie salvo en el índex para que no pueda volver a hacer pedido
    setcookie('compra_diaria', 1, strtotime('today 23:59'),"labs.iam.cat/home/a18jorcuearr/cantina/pages"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finalitzar comanda</title>
    <script> window.setTimeout(function(){
        window.location.href = "index.php";
        }, 3000);
    </script>
    </head>
<body>
    <div class="big_container">
        <div id="header">
            <?php require "header.php" ?>
        </div>

        <div class="confirmacio">
            <img src="imagenes/compraok.jpg" alt="confirmacio" />
        </div>
    </div>
    <?php
        require "escriure_arxius.php";
    ?>
</body>
</html>
