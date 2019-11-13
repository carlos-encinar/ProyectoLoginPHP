<html>
    <head>
        <meta charset="UTF-8">
        <title>Talon Skins</title>
        <style>
            *{
                padding:0px;
                margin:0px;
            }
            
            #cabecera{
                width:100%;
                background-color:black;
                min-height: 10%;
                display:flex;
                border-bottom: solid 10px white;
            }
            
            #divimg{
                width:53%;
                float:left;
                color:white;
            }
            
            #img{
                float:right;
            }
            
            #divlogin{
                width:47%;
                float:left;
                display: flex;
                justify-content: center;
            }
            
            #login{
                color:white;
                float:right;
            }
            
            #container{
                background-color: black;
            }

            #contenido{
                background-color: black;
                min-heigh:500px;
                margin-left: 10%;
                margin-right: 10%;
            }
            
            #talon{
                display: flex;
                justify-content: center;
            }
            
        </style>
    </head>
    <body>
        <div id="cabecera">
            <div id="divimg">
                <img src="logo.png" alt="Logo" id="img"/>
            </div>
            
            <div id="divlogin">
                <div id="login">
                    <h1>
                    <?php 
                        $usuario = $_POST["usuario"];
                        $contraseña = $_POST["contraseña"];
                        echo "Bienvenido ".$usuario;
                    ?>
                    </h1>
                </div>
            </div>
        </div>
        
        <div id="container">
            
            <div id="contenido">
                
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        </br>
                        <div>
                            <h1 id="talon"><span class="badge badge-secondary">
                            <span class="badge badge-pill badge-light">TALON</span></span></h1>
                        </div>
                        </br>
                        <div class="carousel-item active">
                            <img src="talonNormal.jpg" class="d-block w-100" alt="Talon"/>
                        </div>
                    </div>
                </div>
                
                </br>
                
                <div>
                    <h1 id="talon"><span class="badge badge-secondary">
                    <span class="badge badge-pill badge-light">TIENDA DE SKINS</span></span></h1>
                </div>
                
                </br>
                
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Talon Luna Sangrienta</h5>
                      <p class="card-text">Cuesta 1350 RP</p>
                      <form action="Carrito.php " method ="POST" target="_blank">
                          <p>Cantidad &nbsp; <input type="number" name="cantidad"> &nbsp;
                            <button type="button" class="btn btn-light">Comprar Skin</button>
                      </form>
                      
                    </div>
                    <img src="talonLunaSangrienta.jpg" class="card-img-top" alt="talonLunaSangrienta"/>
                </div>

                
            </div>
        </div>
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </body>
</html>
