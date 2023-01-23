<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatchery Hen - Actividad</title>
    <!-- --ACCES-- -->
    <link rel="stylesheet" href="../css/monitoreo.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/nav-bar-small.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ---------------------------------------------- -->
</head>
</head>
<body>
    <main>
        <header>
            <div class="nav-container animado">
                <a href="https://www.ups.edu.ec" target="_blank">
                    <img class="logo-long" src="../resource/images/logo-UPS/logoUPS_long.png" alt="">
                    <img class="logo-short" src="../resource/images/logo-UPS/logoUPS_short.png" alt="">
                </a>

                <div class="nav-desktop">
                    <nav class="nav-bar">
                        <a class="nav-link" href="../index.html"><p class="nav-text">Inicio</p></a>
                        <a class="nav-link" href="#"><p class="nav-text">Monitoreo</p></a>
                        <a class="nav-link" href="dataBase.html"><p class="nav-text">Data</p></a>
                        <a class="nav-link" href="informe.html"><p class="nav-text">Proyecto</p></a>
                    </nav>
                    <img src="../resource/images/logo-UPS/superior shotweif logo - v2.png" alt="">
                </div>
                
                
            </div>
        </header>
        <div class="sub-menu">
            <a href=""><div class="circle"><i class="fa-solid fa-server"></i></div></a>
            <a href=""><div class="circle"><i class="fa-sharp fa-solid fa-microchip"></i></div></a>
            <a href=""><div class="circle"><i class="fa-solid fa-database"></i></div></a>
        </div>

        <div class="gran-container">
            <div class="panel-graficDate">
                
                <div class="widget-box">
                    <h2 class="widget-Title">Temperatura</h2>
                    <div class="widget-Temperature">
                        <span class="cont p1"></span>
                        <span class="cont p2"></span>
                    </div>
                    <span class="circle-center"></span>
                    <span class="telon-inf"></span>
                    <h1 class="marrcador">0 °C</h1>
                </div>

                <div class="widget-box">
                    <h2 class="widget-Title">Humedad</h2>
                    <div class="widget-Humedad">
                        <span class="cont p1"></span>
                        <span class="cont p2"></span>
                    </div>
                    <span class="circle-center"></span>
                    <span class="telon-inf"></span>
                    <h1 class="marrcador">0 %</h1>
                </div>
                
                <div class="widget-box">
                    <h4>Registro</h4>
                    <form action="../bbdd/callDB.php" method="POST">
                        <fieldset>
                            <legend>Datos personales</legend>
                            <!--div>
                                <label for="nom">Nombre</label>
                                <input type="text" name="nombre" id="name">
                            </div>
                            <div>
                                <label for="mail">Correo</label>
                                <input type="text" name="correo" id="email">
                            </div>
                            <div>
                                <label for="numero">Telefono</label>
                                <input type="text" name="telefono" id="cell">
                            </div>
                            <div>
                                <label for="direc">Direcion</label>
                                <input type="text" name="direccion" id="dir">
                            </div-->
                            <div>
                                <label for="numero">SQL Query</label>
                                <input type="text" name="inputCaller">
                            </div>
                            <div>
                                <input type="submit" name="enviar">
                            </div>
                            <table border="1">
                                <thead>
                                    <tr></tr>
                                </thead>
                                
                            </table>
                        </fieldset>
                    </form>
                </div>
                

            </div>

            <div class="panel-dashBoard"></div>
            <div class="panel-dataBase"></div>
        </div>

        <!--div class="g-container">
            <div class="filtro-window">
                <div class="margin">
                    <div class="sub-title">
                        <h2>Seleccion Datos</h2>
                    </div>
                    <div class="box-option">
                        <input type="button" value="Alimentacion">
                        <input type="button" value="Hidratacion">
                        <input type="button" value="Temperatura">
                    </div>
                    <div class="line-l"></div>
                    <div class="sub-title">
                        <h2>Filtro de datos</h2>
                        
                    </div>
                    <div>
                        <h3>Desde:</h3>
                        <input type="date">
                        <h3>Hasta:</h3>
                        <input type="date">
                        <div class="line-l"></div>
                        <h3>Corral</h3>
                    </div>
                </div>
            </div>
            <div class="view-data-container">
                <div class="panel-data"></div>
            </div>
        </div-->
    </main>
</body>
</html>