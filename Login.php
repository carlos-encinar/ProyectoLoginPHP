<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/all.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body background="fondo.jpg">
        <div class="container" align="center">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                            <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                            <form action="Inicio.php " method ="POST">
                                    <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                            </div>
                                        <input type="text" class="form-control" placeholder="username" name="usuario">
                                    </div>
                                    <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                            </div>
                                            <input type="password" class="form-control" placeholder="password" name="contraseña">
                                    </div>
                                    <div class="row align-items-center remember">
                                            <input type="checkbox">Remember Me
                                    </div>
                                    <div class="form-group">
                                            <input type="submit" value="Login" class="btn float-right login_btn">
                                    </div>
                            </form>
                    </div>
                    <div class="card-footer">
                            <div class="d-flex justify-content-center links">
                                    Don't have an account?<a href="#">Sign Up</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                    <a href="#">Forgot your password?</a>
                            </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <script src="js/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        
    </body>
</html>
