<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset');?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php wp_head(); ?>
        <meta name="description" content="A page background effect where SVG shapes morph and transform on scroll" />
        <meta name="keywords" content="background, svg, morph, animation, scroll, shape, web development, css, javascript" />
        <meta name="author" content="Codrops" />
        <!--<link rel="shortcut icon" href="favicon.ico">-->        
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalize.css" />

        <link rel="stylesheet" href="https://use.typekit.net/qal7kha.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/sponsor/pater.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font.css">

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/main.css">
        <script>
            document.documentElement.className = 'js';
            var supportsCssVars = function() {
                var s = document.createElement('style'),
                support;

                s.innerHTML = "root: { --tmp-var: bold; }";
                document.head.appendChild(s);
                support = !!(window.CSS && window.CSS.supports && window.CSS.supports('font-weight', 'var(--tmp-var)'));
                s.parentNode.removeChild(s);
                return support;
            }
            if (!supportsCssVars()) alert('Please view this demo in a modern browser that supports CSS Variables.')
        </script>
        
    </head>
    <body class="demo-2">
        <main>
            <div class="morph-wrap">
                <svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
                    <path d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z"/>
                </svg>
            </div>

            <div class="content-video content-wrap">
              <div class="pull-center-header">
                <h1 class="title tk-jaf-domus-titling-web">
                  <div class="logo-header">
                    <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/Symbol.png" width="60%" alt="logo header" />
                  </div>
                </h1>
                <hr>
                <h2 class="description tk-jaf-domus-titling-web">De Octubre 31 al 02 de Noviembre 2019</h2>
                <a href="#" class="button" id="openModal">ver video completo</a>
              </div>
              
              <!-- The modal -->
              <div id="video_modal" class="modal">
                <!-- The modal content -->
                <div class="modal-content">
                  <span class="close-modal">&times;</span>
                  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
            <div class="content content--fixed">
                <header class="codrops-header">
                    <h1> 
                      <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/logo_horz.png"/>
                    </h1>
                    <div class="right-buttons">
                      <div>
                        <a class="button" href="https://www.ticketcode.co/eventos/ila19" target="_blank">comprar boletas</a>
                        <?php //echo do_shortcode('[google-translator]'); ?>
                      </div>
                      <a id="open_nav" href="javascript:void(0)" onclick="openNav()">
                          <span></span>
                          <span></span>
                          <span></span>
                      </a>
                    </div>
                    
                </header>
            </div>
            <!-- The overlay -->
            <div id="myNav" class="overlay">

              <!-- Button to close the overlay navigation -->
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

              <!-- Overlay content -->
              <div class="overlay-content">
                <a onclick="closeNav()" href="#que_es">Qué es ILA19</a>
                <a onclick="closeNav()" href="#ver_video">Ver video completo</a>
                <a onclick="closeNav()" href="#lugar">Lugar</a>
                <a onclick="closeNav()" href="#boleteria">Boleteria</a>
                <a onclick="closeNav()" href="#ser_patrocinador">Conviertete en patrocinador</a>
              </div>

            </div>
            <div class="social-bar">
              <a href="https://www.instagram.com/ila19medellin/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
              <a href="https://twitter.com/ILA19Medellin" class="icon icon-twitter" target="_blank"></a>
              <a href="https://co.linkedin.com/company/ixdamedellin" class="icon icon-linkedin1" target="_blank"></a>
              <a href="mailto:news@ila19.ixdamedellin.co" class="icon icon-mail4" target="_blank"></a>
            </div>
            
            <!-- Que Es -->
            <section class="container">
              <div class="content-wrap" id="que_es">
                  <div class="content content--layout">
                      <div class="image"></div>
                      <div class="content_info que-es">
                        <div class="content_header" style="background-color: #FF8800;">
                          <h3 class="content__title tk-jaf-domus-titling-web">
                            <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/logo_horz.png" width="40%"/>
                          </h3>
                        </div>
                        <div class="content_body">
                          <p class="content__desc" align="left">
                            Es la conferencia de Diseño de Interacción, Experiencia de Usuario, Tecnología e Innovación más importante de América Latina.
                          </p><br>
                          <p class="content__desc" align="left">
                            El tema para el Interaction Latin America 2019, será <strong>La Convergencia</strong> como punto donde la geografía, las personas, la cultura, la tecnología e ideologías se encuentran y evolucionan.
                          </p><br>
                          <p class="content__desc" align="left">
                            ILA19 es una gran oportunidad para conectar a líderes del diseño y la innovación, en pro de un mismo objetivo, la construcción de una sociedad mejor. 
                          </p>
                        </div>
                        
                      </div>
                      
                  </div>
              </div>
            </section>
            
            <!-- Lugar -->
            <section class="container">
              <div class="content-wrap" id="lugar">
                  <div class="content content--layout content--layout-2">
                      <div class="image"></div>
                      <div class="content_info lugar">
                        <div class="content_header" style="background-color: #00A3BB;">
                          <h3 class="content__title tk-jaf-domus-titling-web">Medellín</h3>
                        </div>
                        <div class="content_body">
                          <p class="content__desc" style="text-align: left;">
                            Medellín, la ciudad de la eterna primavera, con ofertas culturales, recreativas y/o de negocios.
                            </p><br>
                          <p class="content__desc" align="left">
                          Es la ciudad que más invierte en innovación en Colombia, ganando en el 2012 el premio internacional como "La ciudad más innovadora" premio otorgado por "The Wall Street Journal Magazine" y Citibank con la colaboración de "The Urban Land Institute".
                          </p><br>
                          <p class="content__desc" align="left">
                            La ciudad se ha ha convertido en centro de negocios en la región, y el destino turístico más popular en Suramérica.
                          </p>
                        </div>
                      </div>
                  </div>
              </div>
            </section>
            
            <!-- Boletería -->
            <section class="container">
              <div class="content-wrap" id="boleteria">
                  <div class="content content--layout content--layout-3">
                      <div class="image"></div>
                      <div class="content_info boleteria">
                        <div class="content-header">
                          <h3 class="content__title tk-jaf-domus-titling-web">Boleteria</h3>
                        </div>
                        <div class="content_body">
                            <h2>¡No pierdas la oportunidad de obtener tus boletas al precio más bajo!</h2>
                          <ul class="timeline">
                            <li>
                              <p style="color: black; text-align: left;">SUPER EARLY BIRD:</p>
                              <p class="price lg"> USD 100</p>
                            </li>
                            <li>
                              <p style="color: black; text-align: left;">EARLY BIRD</p>
                              <p class="price md"> USD 250</p>
                            </li>
                            <li>
                              <p style="color: black; text-align: left;">REGULAR</p>
                              <p class="price sm"> USD 350</p>
                            </li>
                            
                          </ul>

                          <a class="button" href="https://www.ticketcode.co/eventos/ila19">comprar boletas</a>
                        </div>
                      </div>

                  </div>
              </div>
            </section>

            <!-- Related demos -->
            <section class="container-fluid footer">
              <div>
                <h4 class="tk-jaf-domus-titling-web">PATROCINADORES</h4>
                <div class="logo-footer">
                  <img width="10%" src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/patrocinador_footer.png" alt="logo footer" />
                </div>
                <hr>
                <div class="footer-content">
                  <!-- <a class="button">conviertete en patrocinador</a> -->
                  <p>
                  <strong>Organizado por</strong> <br><span>ixda.org</span>
                  </p>
                  <p>
                  <strong>Mantenerse en contacto </strong><br>info@ila19.ixdamedellin.co</span>
                  </p>
                  <p>
                  <strong>Local</strong><br> <span>IxDA Medellin</span>
                  </p>
                </div>
                 <br>
                 <!-- <h2 style="font-weight: bold; text-transform: uppercase;" class="tk-jaf-domus-titling-web">suscribete a nuestro newsletter</h2> -->
                <br>
                <div class="footer-content justify-content-center">
                  <img width="90px" src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/logo_footer.png" alt="logo footer" />
                </div>
                <div class="footer-content justify-content-center">
                  <p><br>Todo los derechos reservados 2018.</p>
                </div>
              </div>
            </section>

        </main>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/anime.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/scrollMonitor.js"></script>
         

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script>
          /* Open when someone clicks on the span element */
          function openNav() {
            document.getElementById("myNav").style.width = "100%";
            document.getElementById("open_nav").style.display = "none";
          }

          /* Close when someone clicks on the "x" symbol inside the overlay */
          function closeNav() {
            document.getElementById("myNav").style.width = "0%";
            document.getElementById("open_nav").style.display = "block";
          }
        </script>
    </body>
</html>
