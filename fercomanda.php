<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include.inc") ?>
    <title>CANTINA PEDRALBES</title>
<style>

</style>
</head>
<body>

    <?php include("header.php")?>
    
    <?php include("footer.php")?>

    <from>
        <div id="begudes">
        <h2>BEGUDA</h2>
            REFRESCOS:
            <select>
                <option>Ninguna</option>
                <option>Coca-Cola</option>
                <option>Coca-Cola Zero</option>
                <option>Fanta de Naranja</option>
                <option>Fanta de Limon</option>
                <option>Nestea</option>
                <option>Aquarius</option>
            </select>
            <input type="checkbox"></input>
            
            <p>CAFES:
            <select>
                <option>Ninguna</option>
                <option>Cafe Solo</option>
                <option>Cafe con Leche</option>
                <option>Cafe descafeinado</option>
                <option>Cafe Cortado</option>
            </select><input type="checkbox"></input></p>


            <p>ZUMOS:
            <select>
                <option>Ninguna</option>
                <option>Zumo de Naranja</option>
                <option>Zumo de Melocoton</option>
                <option>Zumo de Piña</option>
                <option>Zumo de Pera</option>
                <option>Zumo de Uva</option>
            </select><input type="checkbox"></input></p>

        </div>
    </from>

    <button onclick="window.location.href='Formulari.php'">FINALITZA COMANDA</button>

</body>
</html>


