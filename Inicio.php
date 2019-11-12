<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <style>
            #cabecera{
                align: center;
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
    <?php 
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        echo "Bienvenido ".$usuario;
    ?>
        <div class="container">
            <div class="jumbotron">
                <h1 id="cabecera"><u>Campeones de Leage Of Leyends</u></h1> 
              <p>En esta página verás los campeones del juego Leage of Leyends </p> 
            </div> 
      </div>
    </body>
</html>
