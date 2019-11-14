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
            
            #talon{
                display: flex;
                justify-content: center;
            }
            
            #textoTalon{
                padding:3%;
            }
            
            #info{
                min-width: 100%
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
                
                <div>
                    
                </div>
                
                <h1>
                    <?php
                        $espadaSempiterna = $_POST["espadaSempiterna"];

                        echo "Has comprado TalonEspadaSempiterna por".
                    ?>
                </h1>
            </div>
            
        </div>
        
        <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
    </body>
</html>
