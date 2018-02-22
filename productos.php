<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ICS-CR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/bootstrap-lightbox.min.css">
    
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script> -->
    <script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/min/bootstrap-lightbox.min.js"></script>
  </head>
  <body>
    <!-- Header Start -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                            <!-- header Nav Start -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          <a class="navbar-brand" href="index.html">
                              <img src="img/logo-copy.png" alt="Logo">
                          </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Inicio</a></li>
<!--                             <li><a href="work.html">Work</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="contact.html">Contact</a></li> -->
                            <li class="facebook-icon">
                              <a href="https://www.facebook.com/ICScostarica2015/"></a>
                            </li>
                            <li class="linked-icon">
                              <a href="https://www.linkedin.com/in/juan-carlos-hernandez-8442561?trk=hp-identity-photo"></a>
                            </li>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- header close -->
    <div id="slider"> 
        <div class="slides slider-biomedica">
          <?php
            $puntero = opendir("img/productos/slider-internos/Biomedica");
            $img = 0;

            while(false!==($imagenes=readdir($puntero))){
              if($imagenes!= "." && $imagenes != ".."){
                if($img < 4){
                    echo "<div class='slider'>";
                    echo "<div class='legend'></div>";
                    echo "<div class='legend-left'></div>";
                    echo "<div class='legend-right'></div> ";
                    echo "<div class = 'image'>";
                    echo "<img src = 'img/productos/slider-internos/Biomedica/$imagenes'</img>";
                    echo "</div>";
                    echo "</div>";
                }
                $img++;
              }
            }
            closedir($puntero);
          ?>
        </div>
        <div class="slides slider-cajas-isotermicas">
          <?php
            $puntero = opendir("img/productos/slider-internos/cajas-isotermicas");
            $img = 0;

            while(false!==($imagenes=readdir($puntero))){
              if($imagenes!= "." && $imagenes != ".."){
                if($img < 4){
                    echo "<div class='slider'>";
                    echo "<div class='legend'></div>";
                    echo "<div class='legend-left'></div>";
                    echo "<div class='legend-right'></div> ";
                    echo "<div class = 'image'>";
                    echo "<img src = 'img/productos/slider-internos/cajas-isotermicas/$imagenes'</img>";
                    echo "</div>";
                    echo "</div>";
                }
                $img++;
              }
            }
            closedir($puntero);
          ?>
        </div>
        <div class="slides slider-restaurantes">
          <?php
            $puntero = opendir("img/productos/slider-internos/restaurantes");
            $img = 0;

            while(false!==($imagenes=readdir($puntero))){
              if($imagenes!= "." && $imagenes != ".."){
                if($img < 4){
                    echo "<div class='slider'>";
                    echo "<div class='legend'></div>";
                    echo "<div class='legend-left'></div>";
                    echo "<div class='legend-right'></div> ";
                    echo "<div class = 'image'>";
                    echo "<img src = 'img/productos/slider-internos/restaurantes/$imagenes'</img>";
                    echo "</div>";
                    echo "</div>";
                }
                $img++;
              }
            }
            closedir($puntero);
          ?>
        </div>
        <div class="slides slider-remolcadores">
          <?php
            $puntero = opendir("img/productos/slider-internos/remolcadores");
            $img = 0;

            while(false!==($imagenes=readdir($puntero))){
              if($imagenes!= "." && $imagenes != ".."){
                if($img < 4){
                    echo "<div class='slider'>";
                    echo "<div class='legend'></div>";
                    echo "<div class='legend-left'></div>";
                    echo "<div class='legend-right'></div> ";
                    echo "<div class = 'image'>";
                    echo "<img src = 'img/productos/slider-internos/remolcadores/$imagenes'</img>";
                    echo "</div>";
                    echo "</div>";
                }
                $img++;
              }
            }
            closedir($puntero);
          ?>
        </div>
         <div class="slides slider-contenedores">
          <?php
            $puntero = opendir("img/productos/slider-internos/contenedores");
            $img = 0;

            while(false!==($imagenes=readdir($puntero))){
              if($imagenes!= "." && $imagenes != ".."){
                if($img < 4){
                    echo "<div class='slider'>";
                    echo "<div class='legend'></div>";
                    echo "<div class='legend-left'></div>";
                    echo "<div class='legend-right'></div> ";
                    echo "<div class = 'image'>";
                    echo "<img src = 'img/productos/slider-internos/contenedores/$imagenes'</img>";
                    echo "</div>";
                    echo "</div>";
                }
                $img++;
              }
            }
            closedir($puntero);
          ?>
        </div>
        <div class="slides slider-suministros">
          <?php
            $puntero = opendir("img/productos/slider-internos/suministros");
            $img = 0;

            while(false!==($imagenes=readdir($puntero))){
              if($imagenes!= "." && $imagenes != ".."){
                if($img < 4){
                    echo "<div class='slider'>";
                    echo "<div class='legend'></div>";
                    echo "<div class='legend-left'></div>";
                    echo "<div class='legend-right'></div> ";
                    echo "<div class = 'image'>";
                    echo "<img src = 'img/productos/slider-internos/suministros/$imagenes'</img>";
                    echo "</div>";
                    echo "</div>";
                }
                $img++;
              }
            }
            closedir($puntero);
          ?>
        </div>
        <div class="switch">
          <ul>
            <li>
              <div class="on"></div>
            </li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div> 
      </div>
      <section class="clients mb-2 ">
        <div class="container-fluid">
          <div class="row text-center">
            <div class="col-md-4">
              <div class="wrapper-img">
                <img src="img/logo-melform.png" alt="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="titulo-clients">
                <h1>
                  Representantes Exclusivos
                </h1>
              </div>
            </div>
            <div class="col-md-4">
              <div class="wrapper-img dj-productos-wrapper">
                <img src="img/logo-dj.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="introduccion mb-2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="wrapper-title text-center mb-2"></h2>
              <p class="wrapper-descripcion"></p>
            </div>
          </div>
        </div>
      </section>
        <!-- Portfolio Start -->
          
      <section id="class-productos">
        <div class="container-fluid">
          <h2 class="text-center mb-2" style="text-transform: uppercase;">
            Nuestros productos
          </h2>
          <div class="row farmaceutica" id="container_galeria">
            <?php
              $puntero = opendir("img/productos/Biomedica");
              $img = 0;
              while(false!==($imagenes=readdir($puntero))){
                if($imagenes!= "." && $imagenes != ".."){
                  if($img < 50){
                      echo "<div class = 'col-xs-6 col-md-3 mb-2'>";
                      echo "<img src = 'img/productos/Biomedica/$imagenes' width = '100%'</img>";
                      echo "</div>";
                  }
                  $img++;
                }
             }
             closedir($puntero);
            ?>
          </div>
          <div class="row cajas-isotermicas" id="container_galeria">
            <?php
              $puntero = opendir("img/productos/cajas-isotermicas");
              $img = 0;

              while(false!==($imagenes=readdir($puntero))){
                if($imagenes!= "." && $imagenes != ".."){
                  if($img < 50){
                      echo "<div class = 'col-xs-6 col-md-3 mb-2'>";
                      echo "<img src = 'img/productos/cajas-isotermicas/$imagenes' width = '100%'</img>";
                      echo "</div>";
                  }
                  $img++;
                }
             }
             closedir($puntero);
            ?>
          </div>
          <div class="row restaurantes" id="container_galeria">
              <?php
                $puntero = opendir("img/productos/restaurantes");
                $img = 0;

                while(false!==($imagenes=readdir($puntero))){
                  if($imagenes!= "." && $imagenes != ".."){
                    if($img < 50){
                        echo "<div class = 'col-xs-6 col-md-3 mb-2'>";
                        echo "<img src = 'img/productos/restaurantes/$imagenes' width = '100%'</img>";
                        echo "</div>";
                    }
                    $img++;
                  }
               }
               closedir($puntero);
              ?>
            </div>
            <div class="row remolcadores" id="container_galeria">
              <?php
                $puntero = opendir("img/productos/remolcadores");
                $img = 0;

                while(false!==($imagenes=readdir($puntero))){
                  if($imagenes!= "." && $imagenes != ".."){
                    if($img < 50){
                        echo "<div class = 'col-xs-6 col-md-3 mb-2'>";
                        echo "<img src = 'img/productos/remolcadores/$imagenes' width = '100%'</img>";
                        echo "</div>";
                    }
                    $img++;
                  }
               }
               closedir($puntero);
              ?>
            </div>
            <div class="row contenedores" id="container_galeria">
              <?php
                $puntero = opendir("img/productos/contenedores");
                $img = 0;

                while(false!==($imagenes=readdir($puntero))){
                  if($imagenes!= "." && $imagenes != ".."){
                    if($img < 50){
                        echo "<div class = 'col-xs-6 col-md-3 mb-2'>";
                        echo "<img src = 'img/productos/contenedores/$imagenes' width = '100%'</img>";
                        echo "</div>";
                    }
                    $img++;
                  }
               }
               closedir($puntero);
              ?>
            </div>
             <div class="row suministros" id="container_galeria">
              <?php
                $puntero = opendir("img/productos/suministros");
                $img = 0;

                while(false!==($imagenes=readdir($puntero))){
                  if($imagenes!= "." && $imagenes != ".."){
                    if($img < 50){
                        echo "<div class = 'col-xs-6 col-md-3 mb-2'>";
                        echo "<img src = 'img/productos/suministros/$imagenes' width = '100%'</img>";
                        echo "</div>";
                    }
                    $img++;
                  }
               }
               closedir($puntero);
              ?>
            </div>
        </div>
      </section>
      <!-- Portfolio End -->
    
    <!-- footer Start -->
     <footer>
      <div class="container">
        <div class="row">
          <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
            <div class="border-right-white">
              <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección</h2>
              <p>
                Escazú, San José,Costa Rica.
              </p>
            </div>
          </div>
          <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
            <div class="border-right-white">
              <h2><i class="fa fa-envelope" aria-hidden="true"></i> Correo</h2>
              <p>
                <a class="auto-generated-link" data-auto-recognition="true" data-content="info@icscostarica.com" href="mailto:info@icscostarica.com" data-type="mail">info@icscostarica.com</a>
                </br>
                <a class="auto-generated-link" data-auto-recognition="true" data-content="jchernandez@icscostarica.com" href="mailto:jchernandez@icscostarica.com" data-type="mail">jchernandez@icscostarica.com</a>
              </p>
            </div>
          </div>
          <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
            <div class="border-right-white">
              <h2><i class="fa fa-phone" aria-hidden="true"></i> Teléfono</h2>
              <p>
                +506 2215 0147
                </br>
                +506 8442 4224
              </p>
            </div>
          </div>
          <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-3">
            <div class="">
              <h2><i class="fa fa-share-square-o" aria-hidden="true"></i> Siguenos</h2>
              <p class="social-network">
                <a href="https://www.facebook.com/ICScostarica2015/">
                  <img src="img/facebook.png" alt="">
                </a>
                <a href="https://www.linkedin.com/in/juan-carlos-hernandez-8442561?trk=hp-identity-photo">
                  <img src="img/linkedin.png" alt="">
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <section class="copyright">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <p class="text-center">2016. Copyright ICS S.A. Costa Rica</p>
          </div>
        </div>
      </div>  
    </section>
    <a href="#" class="go-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>



<!-- <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script> -->
        
    </body>
</html>
