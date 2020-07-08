<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <meta charset="UTF-8">
    </head>
    <style>

        /* label color */
        .input-field label {
            color: red !important;
        }
        /* label focus color */
        .input-field input[type=text]:focus + label {
            color: red !important;;
        }
        /* label underline focus color */
        .input-field input[type=text]:focus {
            border-bottom: 1px solid red !important;
            box-shadow: 0 1px 0 0 red !important;
        }
        /* valid color */
        .input-field input[type=text].valid {
            border-bottom: 1px solid red !important;
            box-shadow: 0 1px 0 0 red !important;
        }
        /* invalid color */
        .input-field input[type=text].invalid {
            border-bottom: 1px solid red !important;
            box-shadow: 0 1px 0 0 red !important;
        }
        /* icon prefix focus color */
        .input-field .prefix.active {
            color: red !important;;
        }

        body {
            background: url(img/fondo_body.png) fixed;
        }
        .borde {
            margin-bottom: 15px;
            text-align: center;
        }
        .flex {
            display : flex;
            flex-wrap: wrap;
        }
        .bold {
            font-weight: bold;
        }
        .fondoFooter{
            background: url(img/texture_footer.png) fixed;
        }
    </style>   
    <body class="red">
        <header>
            <nav>
                <div class="nav-wrapper red scrollspy" id="home">
                    <a href="#home" class="brand-logo">Anfp</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#jugadores">Jugadores<i class="material-icons left">face</i></a></li>
                        <li><a href="#auspiciadores">Auspiciadores<i class="material-icons left">verified_user</i></a></li>
                        <li><a href="#dirigentes">Dirigentes<i class="material-icons left">access_time</i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>

            <!-- SLIDER -->

            <div class="slider">
                <ul class="slides">
                    <li>
                        <img class="responsive-img" src="img/banner2.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img class="responsive-img" src="img/banner.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- JUGADORES -->

            <div class="row scrollspy" id="jugadores">
                <div class="col s12 center-align white-text">
                    <h3>Jugadores</h3>
                    <div class="divider"></div>
                </div>                
            </div>

            <div class="row ">
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/1.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/2.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/3.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/4.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/5.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/6.png">
                </div>

                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/7.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/8.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/9.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/10.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/11.png">
                </div>
                <div class="col s6 m4 l2 borde">
                    <img class="responsive-img" src="img/12.png">
                </div>

            </div>

            <!-- AUSPICIADORES -->


            <div class="row scrollspy" id="auspiciadores">
                <div class="col s12 center-align white-text">
                    <h3>Auspiciadores</h3>
                    <div class="divider"></div>
                </div>                
            </div>

            <div class="row center flex">                
                <div class="col s12 m6 l6 flex">
                    <div class="card-panel">                     
                        <img class="responsive-img" src="img/auspiciador1.jpg" />
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </h6>
                    </div>
                </div>

                <div class="col s12 m6 l6 flex">
                    <div class="card-panel">                       
                        <img class="responsive-img" src="img/auspiciador1.jpg" /> 
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </h6>
                    </div>
                </div>
            </div>

            <!-- DIRIGENTES -->


            <div class="row scrollspy" id="auspiciadores">
                <div class="col s12 center-align white-text">
                    <h3>Dirigentes</h3>
                    <div class="divider"></div>
                </div>                
            </div>

            <div class="row">
                <div class="col s12 m6 l3 center">
                    <div class="card-panel">
                        <img src="img/dirigente2.png" class="responsive-img" />
                        <h4 class="red-text bold">Hector Daves</h4>
                        <h5 class="bold">Presidente</h5>
                        <p class="grey-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it lo</p>
                    </div>
                </div>

                <div class="col s12 m6 l3 center">
                    <div class="card-panel">
                        <img src="img/dirigente3.png" class="responsive-img" />
                        <h4 class="red-text bold">Hector Daves</h4>
                        <h5 class="bold">Vice Presidente</h5>
                        <p class="grey-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it lo</p>
                    </div>
                </div>

                <div class="col s12 m6 l3 center">
                    <div class="card-panel">
                        <img src="img/dirigente4.png" class="responsive-img" />
                        <h4 class="red-text bold">Hector Daves</h4>
                        <h5 class="bold">Secretario</h5>
                        <p class="grey-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it lo</p>
                    </div>
                </div>

                <div class="col s12 m6 l3 center">
                    <div class="card-panel">
                        <img src="img/dirigente1.png" class="responsive-img" />
                        <h4 class="red-text bold">Hector Daves</h4>
                        <h5 class="bold">Presidente</h5>
                        <p class="grey-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it lo</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s12 m12 l6 hide-on-small-only center">
                                <h4>Se parte de nuestra inchada</h4>
                                <img class="responsive-img" src="img/hincha.jpg" />
                                <p class="grey-text">Gana pasajes para el proximo encuentro</p>
                            </div>

                            <form class="col s12 m12 l6 center">
                                <h4>Registrate aqui</h4>
                                <div class="divider red"></div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix red-text">account_circle</i>
                                    <input id="nombre" type="text" class="validate">
                                    <label for="nombre">Nombre</label>
                                </div>  
                                <div class="input-field col s12">
                                    <i class="material-icons prefix red-text">account_circle</i>
                                    <input id="apellido" type="text" class="validate">
                                    <label for="apellido">Apellido</label>
                                </div> 
                                <div class="input-field col s12">
                                    <i class="material-icons prefix red-text">phone</i>
                                    <input id="telefono" type="text" class="validate">
                                    <label for="telefono">Telefono</label>
                                </div>

                                <button class="btn red white-text">REGISTRAR</button>

                            </form>
                        </div>
                    </div>


                </div>
            </div>

        </main>
        <footer class="page-footer red darken-4">
            <div class="col s12 fondoFooter">
          <div class="container">
            <div class="row">
             
                <div class="col s12 m12 l6">
                    <h4>Información</h4>
                    <p class="grey-text">El mejor equipo de sud america es la rojita, equipo de chile son sus maximas figuras</p>
                    <ul> <a href="#home" class="white-text">Bus de la roja<i class="material-icons left">directions_bus</i></a></ul>
                    <ul> <a href="#home" class="white-text">Bus de la roja<i class="material-icons left">directions_bus</i></a></ul>
                    
                </div>
                <div class="col s12 m12 l3">
                    <h4>Triunfos recientes</h4>
                    <ul> <a href="#home" class="white-text">Bus de la roja<i class="material-icons left">directions_bus</i></a></ul>
                    <ul> <a href="#home" class="white-text">Bus de la roja<i class="material-icons left">directions_bus</i></a></ul>
                </div>
                <div class="col s12 m12 l3 hide-on-med-and-down">
                    <h6 class="white-text">ANFP</h6>
                    <img height="50" width="50" src="img/logo.png" />                    
                </div>
                
            </div>
          </div>
            </div> 
            
          <div class="footer-copyright red">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".button-collapse").sideNav();
                $(".scrollspy").scrollSpy();
                Materialize.updateTextFields();
                $('.slider').slider({indicators: false, height: 650});
            });

        </script>
    </body>
</html>