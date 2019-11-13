<html>
    <head>
        <meta charset="UTF-8">
        <title>Talon Page</title>
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
            }
            
            #divimg{
                width:60%;
                float:left;
                color:white;
            }
            
            #img{
                float:right;
            }
            
            #divlogin{
                width:41%;
                float:left;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            #login{
                color:white;
            }
            
            #divider{
                blackground-color:black;
                width: 100%;
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
            
            #textoTalon{
                padding:2%;
            }
            
            #info{
                min-width: 100%
            }
            
        </style>
    </head>
    <body>
        <div id="cabecera">
            <div id="divimg">
                <img src="logo2.png" alt="Logo" id="img"/>
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
        
        <div >
            <img src="divider.png" alt="divider" id="divider"/>
        </div>
        
        <div id="container">
            
            <div id="contenido">
                
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        </br>
                        <div>
                            <h1 id="talon">
                                    <span class="badge badge-pill badge-light" id="textoTalon"><b><p><img src="assassin.png" alt="asesino"/></p> TALON <p>LA SOMBRA DE LA ESPADA</p></b></span>
                            </h1>
                                    
                        </div>
                        </br>
                        <div class="carousel-item active">
                            <img src="talonNormal.jpg" class="d-block w-100" alt="Talon"/>
                        </div>
                    </div>
                </div>
                
                </br>
                </br>
                
                <div class="card bg-light mb-3" style="max-width: 18rem;" id="info">
                    <div class="card-header">Información</div>
                    <div class="card-body">
                        <h5 class="card-title">Talon</h5>
                        <p class="card-text">
                            Talon es el cuchillo de la oscuridad, un asesino despiadado capaz de atacar sin previo aviso y huir antes de que salte alarma alguna. Logró granjearse una peligrosa reputación en las terribles calles de Noxus, 
                            donde se vio obligado a luchar, matar y robar para sobrevivir. Talon, adoptado por la ilustre familia Du Couteau, ejerce ahora su letal profesión a las órdenes del imperio, 
                            asesinando líderes, capitanes y héroes rivales, además de noxianos lo bastante osados como para atraerse la enemistad de sus dirigentes.
                        </p>
                        <h5 class="card-title">Talon y Katarina</h5>
                        <p class="card-text">"Los tres maestros de las cuchillas más temibles de Valoran están vinculados a la casa de Du Couteau: mi padre, Talon y yo. Que nos rete quien se atreva".
                            ~ Katarina Du Couteau
                        </p>
                    </div>
                </div>
               
                </br>

                <div>
                    <h1 id="talon">
                    <span class="badge badge-pill badge-light" id="textoTalon">TIENDA DE SKINS</span></h1>
                </div>
                
                </br>
                
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Talon Espada Sempiterna</h5>
                      <p class="card-text">Cuesta 1350 RP</p>
                      <form action="Carrito.php " method ="POST" target="_blank">
                          <p>Cantidad &nbsp; <input type="number" name="cantidad"> &nbsp;
                            <button type="button" class="btn btn-light">Comprar Skin</button>
                      </form>
                      
                    </div>
                    <img src="espadaSempiterna.jpg" class="card-img-top" alt="espadaSempiterna"/>
                </div>
                
                </br>
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
