<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dades comanda</title>
</head>
<body>
    <div class="global">
        <div id="header">
            <?php require "header.php" ?>
        </div>

        <div id="container_detalls">
            <div id="dades_client">
                
                <form action="comandaok.php" method="post">
                    <p>
                        <input type="text" name="nom" placeholder="Nom i cognoms" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required>
                    </p>
                    <p>
                        <input type="text" name="Tel" placeholder="Telèfon" minlength=9 maxlength=9 pattern=".{9,}" required>
                    </p>
                    <p>
                        <input type="text" name="email" placeholder="Email" required>
                    </p>
                    <p>
                        <input id="myForm" class="buttonB" type="submit" value="ENVIAR I CONTINUAR">
                    </p>
                    <p>
                        <input id="listaItems" name="listaItems" type="hidden" value="">
                    </p>
                    <p>
                        <input id="totalItems" name="totalItems" type="hidden" value="">
                    </p>
                </form>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

                <script src="validarEmail.js"></script>
            </div>
            </div>
        </div>
    
        <div class="container">
            <?php require "footer.php" ?>
        </div>
    </div>

    <script src="canviMenu.js"></script>
</body>
</html>

