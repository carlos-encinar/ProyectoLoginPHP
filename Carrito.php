<html>
    <head>
        <meta charset="UTF-8">
        <title>Talon Page</title>
        <style>
            *{
                padding:0px;
                margin:0px;
            }
            
            #body{
                background-color: black;
            }
            
            #cabecera{
                width:100%;
                background-color:black;
                min-height: 10%;
                display:flex;
            }
            
            #divimg{
                width:68%;
                float:left;
                color:white;
            }
            
            #img{
                float:right;
            }
            
            #divlogin{
                width:34%;
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
                color:white;
            }
            
            #carrito{
                display:flex;
                justify-content: center;
                align-content: center;
            }
            
            #caja{
                padding:15%;
            }
            
            #texto{
                display:flex;
                justify-content: center;
                align-content: center;
                font-weight: bold;
                font-size: 50px;
            }
            
        </style>
    </head>
    <body id="body">
        <div id="cabecera">
            <div id="divimg">
                <img src="logo2.png" alt="Logo" id="img"/>
            </div>
            
            <div id="divlogin">
            </div>
            
        </div>
        
        <div >
            <img src="divider.png" alt="divider" id="divider"/>
        </div>
        
        <div id="container">
            
            <div id="contenido">
                
                <br/>
                
                <div id="carrito">
                    <h1>
                        <span class="badge badge-pill badge-light" id="caja">CARRITO DE LA COMPRA</span>
                    </h1>
                </div>
                
                <br/>
                <br/>
                <br/>
                
                <h1 id="texto" >
                
                    <?php
                        $cantidad1 = $_POST ["cantidad1"];

                        echo "Has comprado ".$cantidad1;
                        echo " skins de Talon Espada Sempiterma por 1850 RP cada una.";
                    ?>
                    
                </h1>
                
                <br/>
                <br/>
                
                <h1 id="texto">
                
                    <?php
                        $cantidad2 = $_POST ["cantidad2"];

                        echo "Has comprado ".$cantidad2;
                        echo " skins de Talon Luna Sangrienta por 1350 RP cada una.";
                    ?>
                    
                </h1>
                
            </div>
            
        </div>
        
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </body>
</html>
