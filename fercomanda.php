<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cantina Pedralbes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>    
    <link rel="stylesheet" href="style.css">
    <script src="js/menu.js"></script>
</head>
<body>
<?php include("header1.php")?>
    <div class="row">
        <div id="columna1" class="col-sm-10" >
            <div id="items"class="row row-cols-1 row-cols-sm-2 row-cols-md-4"></div>
        </div>
        <div id="pedido" class="col-sm-2">
            <h2>Carrito</h2>
            <hr>
            <ul id="carrito" class="list-group"></ul>
            <hr>
            <h4 >Total: <span id="total"></span>&euro;</h4>
            <button class="btn btn-secondary btn-lg" id="boton-vaciar" >Vaciar</button>
            <input type="button" id="boton-pedir" class="btn btn-primary btn-lg"  value="Siguiente">
        </div>
    </div>
        
    <?php include("footer.php")?>
</body>
</html>




