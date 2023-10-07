<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="iconos/icons/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Bienvenidos</title>
</head>
<body>

    <header id="inicio">
        <section>
            <div class="custom-loader"></div>
        </section>

        <nav>
            <ul>
                <li><a href="#inicio" class="active">Inicio</a></li>
                <li><a href="#carros">Carros</a></li>
                <li><a href="#cartas">Información</a></li>
                <?php
                    include("php/funcionloger.php"); // Incluye el archivo functions.php que contiene la función obtenerEstadoInicioSesion()
                    $isLoggedIn = obtenerEstadoInicioSesion();

                    if ($isLoggedIn) {
                        // Obtener el nombre y apellido del usuario de la sesión
                        $nombreUsuario = ucfirst($_SESSION['nombre_cliente']);
                        $apellidoUsuario = ucfirst($_SESSION['apellido_cliente']);
                        echo '<li>Bienvenid(@), ' . $nombreUsuario . ' ' . $apellidoUsuario . '</li>';
                        echo '<li><a href="reservas/adminreser.php">Mis Reservas</a></li>';
                        echo '<li><a href="php/close.php">Cerrar Sesión</a></li>';
                         } else {
                            echo '<li><a href="registerlogin.php">Iniciar Sesión</a></li>';
                            }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <div class="content">
                <span class="text text-one">Alquiler</span>
                <span class="text text-two"></span>
            </div>
            <p>"El alquiler de carros es una opción conveniente y económica para aquellos que necesitan 
                un medio de transporte temporal. Ya sea para viajes de negocios, vacaciones familiares o 
                simplemente para desplazarse por la ciudad, el alquiler de carros ofrece una amplia gama 
                de opciones para satisfacer las necesidades y preferencias de cada cliente. Con una variedad 
                de vehículos disponibles, desde compactos hasta SUV de lujo, el alquiler de carros brinda 
                flexibilidad y comodidad a aquellos que buscan una alternativa al transporte público o la propiedad de un automóvil".</p>
        </section>

        <section>
            <img src="https://ichef.bbci.co.uk/news/640/cpsprodpb/6B34/production/_94244472_9.jpg" alt="">
        </section>
    </main>

    <section class="principal" id="carros">
        <header>
            <h2>Reserva Tú Vehículo</h2>
        </header>

        <aside class="california"> <!-- uno -->
           
                <article class="articulos">
                      
                        <img src="https://img.remediosdigitales.com/d6d3a0/toyota-gr-supra-2019-2p/450_1000.jpg" alt="">
                       
                            <form method="post" action="php/vehiculos.php">

                                <input type="hidden" name="id_vehiculo" value="1">
                                <div>
                                <i class="fa-solid fa-circle-up"></i>
                                    <p>Modelo: <span><?php echo $modelo = "TOYOTA"; ?></span></p>
                                    <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                                </div>

                                <div>
                                <i class="fa-solid fa-star"></i>
                                    <p>Marca: <span><?php echo $marca = "SUPRA"; ?></span></p>
                                    <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                                </div>

                                <div>
                                <i class="fa-solid fa-fire"></i>
                                    <p>Año: <span><?php echo $año = "2019"; ?></span></p>
                                    <input type="hidden" name="año" value="<?php echo $año; ?>">
                                </div>
                               
                                <div>
                                <i class="fa-brands fa-dropbox"></i>
                                    <p>Placa: <span><?php echo $placa = "SPB-156"; ?></span></p>
                                    <input type="hidden" name="placa" value="<?php echo $placa; ?>">
                                </div>
                                
                                <div>
                                <i class="fa-solid fa-paper-plane"></i>
                                    <p>Tipo de combustible: <span><?php echo $tipo_combustible = "Gasolina"; ?></span></p>
                                    <input type="hidden" name="tipo_combustible" value="<?php echo $tipo_combustible; ?>">
                                </div>
                              
                                <div>
                                <i class="fa-solid fa-compass"></i>
                                    <p>Transmisión: <span><?php echo $transmision = "Manual"; ?></span></p>
                                    <input type="hidden" name="transmision" value="<?php echo $transmision; ?>">
                                </div>
                              
                                <div>
                                <i class="fa-solid fa-person"></i>
                                    <p>Capacidad pasajeros: <span><?php echo $capacidad = "2"; ?></span></p>
                                    <input type="hidden" name="capacidad" value="<?php echo $capacidad; ?>">
                                </div>
                             
                                <div>
                                <i class="fa-solid fa-money-bill"></i>
                                    <p>Precio por día: <span><?php echo $precio_dia = "2.000.000"; ?></span></p>
                                    <input type="hidden" name="precio_dia" value="<?php echo $precio_dia; ?>">
                                </div>
                               
                                <div>
                                <i class="fa-solid fa-circle-half-stroke"></i>
                                    <p>Color: <span><?php echo $color = "Rojo"; ?></span></p>
                                    <input type="hidden" name="color" value="<?php echo $color; ?>">
                                </div>
                             
                                <button type="submit" name="vehiculo">
                                    <span>Reservar</span>
                                </button>
                            </form>
                </article>

                <article class="articulos">
                       <!-- dos -->
                <img src="https://www.lamborghinigoldcoast.com/imagetag/7673/2/l/Used-2019-Ferrari-Portofino-1557507854.jpg" alt="">
                     
                          <form method="post" action="php/vehiculos.php">

                              <input type="hidden" name="id_vehiculo" value="2">
                              <div>
                              <i class="fa-solid fa-circle-up"></i>
                                  <p>Modelo: <span><?php echo $modelo = "FERRARI"; ?></span></p>
                                  <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-star"></i>
                                  <p>Marca: <span><?php echo $marca = "ROMA"; ?></span></p>
                                  <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-fire"></i>
                                  <p>Año: <span><?php echo $año = "2019"; ?></span></p>
                                  <input type="hidden" name="año" value="<?php echo $año; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-brands fa-dropbox"></i>
                                  <p>Placa: <span><?php echo $placa = "YPN-231"; ?></span></p>
                                  <input type="hidden" name="placa" value="<?php echo $placa; ?>">
                              </div>
                              
                              <div>
                              <i class="fa-solid fa-paper-plane"></i>
                                  <p>Tipo de combustible: <span><?php echo $tipo_combustible = "Gasolina"; ?></span></p>
                                  <input type="hidden" name="tipo_combustible" value="<?php echo $tipo_combustible; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-compass"></i>
                                  <p>Transmisión: <span><?php echo $transmision = "Manual"; ?></span></p>
                                  <input type="hidden" name="transmision" value="<?php echo $transmision; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-person"></i>
                                  <p>Capacidad pasajeros: <span><?php echo $capacidad = "2"; ?></span></p>
                                  <input type="hidden" name="capacidad" value="<?php echo $capacidad; ?>">
                              </div>
                           
                              <div>
                              <i class="fa-solid fa-money-bill"></i>
                                  <p>Precio por día: <span><?php echo $precio_dia = "5.000.000"; ?></span></p>
                                  <input type="hidden" name="precio_dia" value="<?php echo $precio_dia; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-solid fa-circle-half-stroke"></i>
                                  <p>Color: <span><?php echo $color = "Naranja"; ?></span></p>
                                  <input type="hidden" name="color" value="<?php echo $color; ?>">
                              </div>
                           
                              <button type="submit" name="vehiculo">
                                  <span>Reservar</span>
                              </button>
                          </form>
              </article>

              <article class="articulos">
                     
              <img src="https://autodinamico.mx/wp-content/uploads/2022/11/Tesla-AD2.png" alt="">
                          <form method="post" action="php/vehiculos.php">

                              <input type="hidden" name="id_vehiculo" value="3">
                              <div>
                              <i class="fa-solid fa-circle-up"></i>
                                  <p>Modelo: <span><?php echo $modelo = "TESLA"; ?></span></p>
                                  <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-star"></i>
                                  <p>Marca: <span><?php echo $marca = "MODEL 3"; ?></span></p>
                                  <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-fire"></i>
                                  <p>Año: <span><?php echo $año = "2016"; ?></span></p>
                                  <input type="hidden" name="año" value="<?php echo $año; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-brands fa-dropbox"></i>
                                  <p>Placa: <span><?php echo $placa = "OAT-241"; ?></span></p>
                                  <input type="hidden" name="placa" value="<?php echo $placa; ?>">
                              </div>
                              
                              <div>
                              <i class="fa-solid fa-paper-plane"></i>
                                  <p>Tipo de combustible: <span><?php echo $tipo_combustible = "Eléctrico"; ?></span></p>
                                  <input type="hidden" name="tipo_combustible" value="<?php echo $tipo_combustible; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-compass"></i>
                                  <p>Transmisión: <span><?php echo $transmision = "Manual"; ?></span></p>
                                  <input type="hidden" name="transmision" value="<?php echo $transmision; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-person"></i>
                                  <p>Capacidad pasajeros: <span><?php echo $capacidad = "2"; ?></span></p>
                                  <input type="hidden" name="capacidad" value="<?php echo $capacidad; ?>">
                              </div>
                           
                              <div>
                              <i class="fa-solid fa-money-bill"></i>
                                  <p>Precio por día: <span><?php echo $precio_dia = "3.000.000"; ?></span></p>
                                  <input type="hidden" name="precio_dia" value="<?php echo $precio_dia; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-solid fa-circle-half-stroke"></i>
                                  <p>Color: <span><?php echo $color = "Rojo"; ?></span></p>
                                  <input type="hidden" name="color" value="<?php echo $color; ?>">
                              </div>
                           
                              <button type="submit" name="vehiculo">
                                  <span>Reservar</span>
                              </button>
                          </form>
              </article>

              <article class="articulos">
                      
                    
    <img src="https://imgcdn.zigwheels.my/large/gallery/exterior/73/1500/yamaha-yzf-r15-slant-rear-view-full-image-845794.jpg" alt="">
                     
                          <form method="post" action="php/vehiculos.php">

                              <input type="hidden" name="id_vehiculo" value="4">
                              <div>
                              <i class="fa-solid fa-circle-up"></i>
                                  <p>Modelo: <span><?php echo $modelo = "YAMAHA"; ?></span></p>
                                  <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-star"></i>
                                  <p>Marca: <span><?php echo $marca = "R-15"; ?></span></p>
                                  <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-fire"></i>
                                  <p>Año: <span><?php echo $año = "2022"; ?></span></p>
                                  <input type="hidden" name="año" value="<?php echo $año; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-brands fa-dropbox"></i>
                                  <p>Placa: <span><?php echo $placa = "POT-23G"; ?></span></p>
                                  <input type="hidden" name="placa" value="<?php echo $placa; ?>">
                              </div>
                              
                              <div>
                              <i class="fa-solid fa-paper-plane"></i>
                                  <p>Tipo de combustible: <span><?php echo $tipo_combustible = "Gasolina"; ?></span></p>
                                  <input type="hidden" name="tipo_combustible" value="<?php echo $tipo_combustible; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-compass"></i>
                                  <p>Transmisión: <span><?php echo $transmision = "Manual"; ?></span></p>
                                  <input type="hidden" name="transmision" value="<?php echo $transmision; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-person"></i>
                                  <p>Capacidad pasajeros: <span><?php echo $capacidad = "2"; ?></span></p>
                                  <input type="hidden" name="capacidad" value="<?php echo $capacidad; ?>">
                              </div>
                           
                              <div>
                              <i class="fa-solid fa-money-bill"></i>
                                  <p>Precio por día: <span><?php echo $precio_dia = "1.000.000"; ?></span></p>
                                  <input type="hidden" name="precio_dia" value="<?php echo $precio_dia; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-solid fa-circle-half-stroke"></i>
                                  <p>Color: <span><?php echo $color = "Azul"; ?></span></p>
                                  <input type="hidden" name="color" value="<?php echo $color; ?>">
                              </div>
                           
                              <button type="submit" name="vehiculo">
                                  <span>Reservar</span>
                              </button>
                          </form>
              </article>

              <article class="articulos">
                    
              <img src="https://publimotos.com/images/2021/agosto-2021/05-agosto/ducati-moster/ducati-monster-02.jpg" alt="">

                          <form method="post" action="php/vehiculos.php">

                              <input type="hidden" name="id_vehiculo" value="5">
                              <div>
                              <i class="fa-solid fa-circle-up"></i>
                                  <p>Modelo: <span><?php echo $modelo = "DUCATI"; ?></span></p>
                                  <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-star"></i>
                                  <p>Marca: <span><?php echo $marca = "MONSTER"; ?></span></p>
                                  <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-fire"></i>
                                  <p>Año: <span><?php echo $año = "2021"; ?></span></p>
                                  <input type="hidden" name="año" value="<?php echo $año; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-brands fa-dropbox"></i>
                                  <p>Placa: <span><?php echo $placa = "RTB-999-A"; ?></span></p>
                                  <input type="hidden" name="placa" value="<?php echo $placa; ?>">
                              </div>
                              
                              <div>
                              <i class="fa-solid fa-paper-plane"></i>
                                  <p>Tipo de combustible: <span><?php echo $tipo_combustible = "Gasolina"; ?></span></p>
                                  <input type="hidden" name="tipo_combustible" value="<?php echo $tipo_combustible; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-compass"></i>
                                  <p>Transmisión: <span><?php echo $transmision = "Manual"; ?></span></p>
                                  <input type="hidden" name="transmision" value="<?php echo $transmision; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-person"></i>
                                  <p>Capacidad pasajeros: <span><?php echo $capacidad = "2"; ?></span></p>
                                  <input type="hidden" name="capacidad" value="<?php echo $capacidad; ?>">
                              </div>
                           
                              <div>
                              <i class="fa-solid fa-money-bill"></i>
                                  <p>Precio por día: <span><?php echo $precio_dia = "3.000.000"; ?></span></p>
                                  <input type="hidden" name="precio_dia" value="<?php echo $precio_dia; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-solid fa-circle-half-stroke"></i>
                                  <p>Color: <span><?php echo $color = "Rojo"; ?></span></p>
                                  <input type="hidden" name="color" value="<?php echo $color; ?>">
                              </div>
                           
                              <button type="submit" name="vehiculo">
                                  <span>Reservar</span>
                              </button>
                          </form>
              </article>

              <article class="articulos">
                      
              <img src="https://www.elcarrocolombiano.com/wp-content/uploads/2019/07/20190720-CHEVROLET-CORVETTE-C8-STINGRAY-01.jpg" alt="">
                     
                          <form method="post" action="php/vehiculos.php">

                              <input type="hidden" name="id_vehiculo" value="6">
                              <div>
                              <i class="fa-solid fa-circle-up"></i>
                                  <p>Modelo: <span><?php echo $modelo = "CHEVROLET"; ?></span></p>
                                  <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-star"></i>
                                  <p>Marca: <span><?php echo $marca = "CORRETE"; ?></span></p>
                                  <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-fire"></i>
                                  <p>Año: <span><?php echo $año = "2019"; ?></span></p>
                                  <input type="hidden" name="año" value="<?php echo $año; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-brands fa-dropbox"></i>
                                  <p>Placa: <span><?php echo $placa = "FRL-256"; ?></span></p>
                                  <input type="hidden" name="placa" value="<?php echo $placa; ?>">
                              </div>
                              
                              <div>
                              <i class="fa-solid fa-paper-plane"></i>
                                  <p>Tipo de combustible: <span><?php echo $tipo_combustible = "Gasolina"; ?></span></p>
                                  <input type="hidden" name="tipo_combustible" value="<?php echo $tipo_combustible; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-compass"></i>
                                  <p>Transmisión: <span><?php echo $transmision = "Manual"; ?></span></p>
                                  <input type="hidden" name="transmision" value="<?php echo $transmision; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-person"></i>
                                  <p>Capacidad pasajeros: <span><?php echo $capacidad = "2"; ?></span></p>
                                  <input type="hidden" name="capacidad" value="<?php echo $capacidad; ?>">
                              </div>
                           
                              <div>
                              <i class="fa-solid fa-money-bill"></i>
                                  <p>Precio por día: <span><?php echo $precio_dia = "4.000.000"; ?></span></p>
                                  <input type="hidden" name="precio_dia" value="<?php echo $precio_dia; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-solid fa-circle-half-stroke"></i>
                                  <p>Color: <span><?php echo $color = "Rojo"; ?></span></p>
                                  <input type="hidden" name="color" value="<?php echo $color; ?>">
                              </div>
                           
                              <button type="submit" name="vehiculo">
                                  <span>Reservar</span>
                              </button>
                          </form>
              </article>

              <article class="articulos">
                      
                   
 <img src="https://rodatiautos.ar/images/listings/2023-02/d4542ade-1675945169-622.jpg" alt="">

                     
                          <form method="post" action="php/vehiculos.php">

                              <input type="hidden" name="id_vehiculo" value="7">
                              <div>
                              <i class="fa-solid fa-circle-up"></i>
                                  <p>Modelo: <span><?php echo $modelo = "BAJAJ"; ?></span></p>
                                  <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-star"></i>
                                  <p>Marca: <span><?php echo $marca = "DOMINAR 400"; ?></span></p>
                                  <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-fire"></i>
                                  <p>Año: <span><?php echo $año = "2020"; ?></span></p>
                                  <input type="hidden" name="año" value="<?php echo $año; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-brands fa-dropbox"></i>
                                  <p>Placa: <span><?php echo $placa = "A11-GZPK"; ?></span></p>
                                  <input type="hidden" name="placa" value="<?php echo $placa; ?>">
                              </div>
                              
                              <div>
                              <i class="fa-solid fa-paper-plane"></i>
                                  <p>Tipo de combustible: <span><?php echo $tipo_combustible = "Gasolina"; ?></span></p>
                                  <input type="hidden" name="tipo_combustible" value="<?php echo $tipo_combustible; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-compass"></i>
                                  <p>Transmisión: <span><?php echo $transmision = "Manual"; ?></span></p>
                                  <input type="hidden" name="transmision" value="<?php echo $transmision; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-person"></i>
                                  <p>Capacidad pasajeros: <span><?php echo $capacidad = "2"; ?></span></p>
                                  <input type="hidden" name="capacidad" value="<?php echo $capacidad; ?>">
                              </div>
                           
                              <div>
                              <i class="fa-solid fa-money-bill"></i>
                                  <p>Precio por día: <span><?php echo $precio_dia = "800.000"; ?></span></p>
                                  <input type="hidden" name="precio_dia" value="<?php echo $precio_dia; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-solid fa-circle-half-stroke"></i>
                                  <p>Color: <span><?php echo $color = "Verde/Negro"; ?></span></p>
                                  <input type="hidden" name="color" value="<?php echo $color; ?>">
                              </div>
                           
                              <button type="submit" name="vehiculo">
                                  <span>Reservar</span>
                              </button>
                          </form>
              </article>

              <article class="articulos">
                      
              <img src="https://www.bikebound.com/wp-content/uploads/2021/07/BMW-R-nineT-Scrambler-FB-1.jpg" alt="">
                          <form method="post" action="php/vehiculos.php">

                              <input type="hidden" name="id_vehiculo" value="8">
                              <div>
                              <i class="fa-solid fa-circle-up"></i>
                                  <p>Modelo: <span><?php echo $modelo = "BMW"; ?></span></p>
                                  <input type="hidden" name="modelo" value="<?php echo $modelo; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-star"></i>
                                  <p>Marca: <span><?php echo $marca = "R NINE T"; ?></span></p>
                                  <input type="hidden" name="marca" value="<?php echo $marca; ?>">
                              </div>

                              <div>
                              <i class="fa-solid fa-fire"></i>
                                  <p>Año: <span><?php echo $año = "2013"; ?></span></p>
                                  <input type="hidden" name="año" value="<?php echo $año; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-brands fa-dropbox"></i>
                                  <p>Placa: <span><?php echo $placa = "A21-GPPF"; ?></span></p>
                                  <input type="hidden" name="placa" value="<?php echo $placa; ?>">
                              </div>
                              
                              <div>
                              <i class="fa-solid fa-paper-plane"></i>
                                  <p>Tipo de combustible: <span><?php echo $tipo_combustible = "Gasolina"; ?></span></p>
                                  <input type="hidden" name="tipo_combustible" value="<?php echo $tipo_combustible; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-compass"></i>
                                  <p>Transmisión: <span><?php echo $transmision = "Manual"; ?></span></p>
                                  <input type="hidden" name="transmision" value="<?php echo $transmision; ?>">
                              </div>
                            
                              <div>
                              <i class="fa-solid fa-person"></i>
                                  <p>Capacidad pasajeros: <span><?php echo $capacidad = "2"; ?></span></p>
                                  <input type="hidden" name="capacidad" value="<?php echo $capacidad; ?>">
                              </div>
                           
                              <div>
                              <i class="fa-solid fa-money-bill"></i>
                                  <p>Precio por día: <span><?php echo $precio_dia = "1.000.000"; ?></span></p>
                                  <input type="hidden" name="precio_dia" value="<?php echo $precio_dia; ?>">
                              </div>
                             
                              <div>
                              <i class="fa-solid fa-circle-half-stroke"></i>
                                  <p>Color: <span><?php echo $color = "Azul/Negro"; ?></span></p>
                                  <input type="hidden" name="color" value="<?php echo $color; ?>">
                              </div>
                           
                              <button type="submit" name="vehiculo">
                                  <span>Reservar</span>
                              </button>
                          </form>
              </article>

        </aside>
    </section>

    <section class="cartas" id="cartas">
        <header>
            <h1>Alquila un carro y recorre mucho más en tu viaje</h1>
        </header>
        <section>
            <article>
                <header>
                    <h3>Beneficios de alquilar un carro</h3>
                </header>
                <p>Siente la libertad que te da conocer una ciudad al estar detrás del volante. Con tu rent a car puedes tomar las riendas de tu tiempo y armar tu propio itinerario para recorrer y conocer todo lo que quieras. Puedes elegir alquiler de carros pequeños, para pocas personas, o grandes, si vas con amigos o con tu familia. ¡Disfruta tu destino a tu ritmo y aprovecha para conocer mucho más en tu viaje! No te arrepentirás de alquilar un carro.</p>
            </article>

            <article>
            <header>
                <h3>¿Qué tener en cuenta para alquilar un carro?</h3>
            </header>
                <p>Antes de alquilar un carro, ten en cuenta el número de pasajeros que serán en el viaje. Esto te ayudará a decidir el tamaño del carro. Además, presta atención a los seguros que están incluidos en el contrato de alquiler, así como los beneficios de kilometraje ilimitado, tipo de caja y modalidad de entrega del vehículo. También te servirá mirar la puntuación de la compañía de rent a car.</p>
            </article>

            <article>
            <header>
                <h3>¿Qué necesitas para retirar tu carro?</h3>
            </header>
                <p>Para retirar tu carro necesitarás contar con una licencia de conducir en buen estado y vigente, y presentar tu documento/Pasaporte. Ten en cuenta que el nombre de la persona debe ser el mismo tanto en la licencia de conducir como en el documento/Pasaporte. Además, necesitarás tener una tarjeta de crédito a nombre del conductor principal o adicional con saldo suficiente para el bloqueo de seguridad que realiza la agencia de alquiler de carros.</p>
            </article>

            <article>
            <header>
                <h3>¿Cuáles son las formas de entrega del carro?</h3>
            </header>
                <p>Hay 4 modalidades para la entrega de tu carro: 1) la compañía de alquiler de carros hace la entrega del vehículo en el aeropuerto; 2) meet & greet: personal de la agencia de rent a car te espera en el aeropuerto para entregarte el carro; 3) servicio de shuttle: la empresa te ofrece un traslado hasta el local para retirar el vehículo; y 4) confirmación telefónica: al llegar al aeropuerto tienes que comunicarte por teléfono con la agencia para coordinar la entrega del carro.</p>
            </article>
        </section>
    </section>

    <article class="copilots">
        <header>
            <h1>Categorias más consultadas</h1>
        </header>
        <section>
            <img src="https://media.despegar.com/media/pictures/ea7444e6-15f0-4568-a6dc-d3beb73606d4" alt="">
            <div>
                <h3>
                    Facturación, devolución y dudas de cobro
                </h3>
                <p>
                    Resuelve todas tus consultas sobre tus pagosy tus comprobantes
                </p>
            </div>
        </section>

        <section>
        <img src="https://media.despegar.com/media/pictures/31fa5353-0b75-4b72-be5b-590da4d4eec8" alt="">
            <div>
                <h3>
                            Mi reserva
                </h3>
                <p> Encuentra todo lo que puedes hacer con tus reservas y tus solicitudes</p>
            </div>
        </section>

        <section>
        <img src="https://media.despegar.com/media/pictures/2c30fe75-184b-4cf0-9dc5-e8f20d85bb01" alt="">
            <div>
                <h3>
                    Cambios y cancelaciones
                </h3>
                <p> Conoce cómo hacer cambios en tu cueta y todo lo que necesites saber sobre tus cancelaciones</p>
            </div>
        </section>
    </article>

    <footer>
        <article>
            <h3>Guía de Viajes</h3>
            <section>
                <p>Itinerario de Viaje</p>
                <p>Playa del Carmen</p>
                <p>Acapulco</p>
                <p>Santa Marta</p>
            </section>
        </article>

        <section></section>

        <article>
            <h3>Hoteles y cabañas</h3>
            <section>
                <p>Hoteles en Guatape</p>
                <p>Hoteles en Villeta</p>
                <p>Hoteles en Valledupar</p>
                <p>Cabañas en Coveñas</p>
            </section>
        </article>

        <section></section>
        
        <article>
            <h3>Confianza en tus compras</h3>
            <section>
                <p>Términos y condiciones</p>
                <p>Política de privacidad</p>
                <p>Promociones vigentes</p>
                <p>Condiciones IVA</p>
            </section>
        </article>
    </footer>

 
</body>
<script src="js/index.js"></script>
</html>
