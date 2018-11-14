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
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/sponsor/pater.css" />
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
    <body class="demo-2 loading">
        <main>
            <div class="morph-wrap">
                <svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
                    <path d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z"/>
                </svg>
            </div>
            <div class="content-video">
              <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
              </video>

              <div class="pull-center-header">
                
                <h1 class="title tk-jaf-domus-titling-web">
                  <div class="logo-header">
                    <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/logo_header.png" width="60%" alt="logo header" />
                  </div>
                </h1>
                <hr>
                <h2 class="description tk-jaf-domus-titling-web">De Octubre 31 al 02 de Noviembre 2019</h2>
                <a class="button" id="openModal">ver video completo</a>
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
                    <h1 class="codrops-header__title tk-jaf-domus-titling-web">ILA19</h1>
                    
                </header>
                <div class="pull-right">
                  <a class="button">comprar boleteria</a>
                  <?php echo do_shortcode('[google-translator]'); ?>
                </div>
                <a class="pater" id="open_nav" href="javascript:void(0)" onclick="openNav()">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
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
            <div class="content-wrap" id="que_es">
                <div class="content content--layout">
                    <img class="content__img" src="<?php bloginfo('template_url'); ?>/img/image2/4.jpg" alt="Some image" />
                    <div class="content_info que-es">
                      <div class="content_header" style="background-color: #FF8800;">
                        <h3 class="content__title tk-jaf-domus-titling-web">ILA19</h3>
                      </div>
                      <div class="content_body">
                        <p class="content__desc">Es la conferencia de Diseño de Interacción, Experiencia de Usuario, Tecnología e Innovación más importante de América Latina.
                        <br>
                          El tema para el Interaction Latin America 2019, será La Convergencia como punto donde la geografía, las personas, la cultura, la tecnología e ideologías se encuentran y evolucionan.
                        <br>
                          ILA19 es una gran oportunidad para conectar a líderes del diseño y la innovación, en pro de un mismo objetivo, la construcción de una sociedad mejor. </p>
                      </div>
                      
                    </div>
                    
                </div>
            </div>
            <div class="content-wrap" id="lugar">
                <div class="content content--layout content--layout-2">
                    <img class="content__img" src="<?php bloginfo('template_url'); ?>/img/image2/2.jpg" alt="Some image" />
                    <div class="content_info lugar">
                      <div class="content_header" style="background-color: #00A3BB;">
                        <h3 class="content__title tk-jaf-domus-titling-web">Medellín</h3>
                      </div>
                      <div class="content_body">
                        <p class="content__desc">Medellín, la ciudad de la eterna primavera, con ofertas culturales, recreativas y/o de negocios.
                        <br> Es la ciudad que más invierte en innovación en Colombia, ganando en el 2012 el premio internacional como "La ciudad más innovadora" premio otorgado por "The Wall Street Journal Magazine" y Citibank con la colaboración de "The Urban Land Institute".
                        <br>
                        La ciudad se ha ha convertido en centro de negocios en la región, y el destino turístico más popular en Suramérica.</p>
                      </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="content-wrap" id="boleteria">
                <div class="content content--layout content--layout-3">
                    <img class="content__img" src="<?php bloginfo('template_url'); ?>/img/image2/5.jpg" alt="Some image" />
                    <div class="content_info boleteria">
                      <div class="content-header" style="background-color: #C10FC9;">
                        <h3 class="content__title tk-jaf-domus-titling-web">Boleteria</h3>
                      </div>
                      <div class="content_body">
                        <p class="content__desc">Super Early bird <br>
                         Del 17 de noviembre al 15 de diciembre de 2018* ¡No pierdas la oportunidad de obtener tus boletas al precio más bajo! 
                         * o hasta agotar existencias <br>
                         Próximamente estaremos publicando información sobre los siguientes lotes de la boletería. ¡Síguenos en redes y mantente al tanto!</p>
                        <ul class="timeline">
                          <li>
                            <p style="color: black; text-align: left;">Noviembre, 2018</p>
                            <p style="color: black; text-align: left; font-weight: 100px;"> $ 0000000</p>
                          </li>
                          <li>
                            <p style="color: black; text-align: left;">Enero, 2019</p>
                            <p style="color: black; text-align: left; font-weight: 100px;"> $ 0000000</p>
                          </li>
                          <li>
                            <p style="color: black; text-align: left;">Enero, 2019</p>
                            <p style="color: black; text-align: left; font-weight: 100px;"> $ 0000000</p>
                          </li>
                        </ul>

                        <a class="button">comprar boletas</a>
                      </div>
                    </div>

                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br><br><br><br><br><br>

            <!-- Related demos -->
            <section class="content content--related">
              <div class="footer">
                <br><br>
                <h1 class="tk-jaf-domus-titling-web">PATROCINADORES</h1>
                <div class="logo-footer">
                  <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/patrocinador_footer.png" alt="logo footer" />
                </div>
                <hr>
                <div class="footer-content">
                  <a class="button">conviertete en patrocinador</a>
                  <p>
                    Organizado por <span>ixda.org</span>
                  </p>&nbsp;&nbsp;&nbsp;
                  <p>
                    Mantenerse en contacto <span>ila19@ixda.org</span>
                  </p>&nbsp;&nbsp;&nbsp;
                  <p>
                    Local <span>IxDA Medellin</span>
                  </p>&nbsp;&nbsp;&nbsp;
                </div>
                 <br>
                 <h2 style="font-weight: bold; text-transform: uppercase;" class="tk-jaf-domus-titling-web">suscribete a nuestro newsletter</h2>
                <div class="footer-content">

                  <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                  <!--<form class="form-inline" method="post" action="send_email.php">
                    <input type="text" id="name" placeholder="nombre.." name="name" required />
                    
                    <input type="email" id="email" placeholder="email.." name="email" required />
                    
                    <button type="submit">Enviar</button>
                  </form>-->
                </div>

                <br>
                <div class="footer-content">
                  <div class="logo-footer">
                    <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/logo_footer.png" alt="logo footer" />
                  </div>
                </div>
                <br><br>
                <h3 style="font-weight: bold;">Todo los derechos reservados 2018.</h3>
              </div>
            </section>

        </main>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/anime.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/scrollMonitor.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/demo2.js"></script>
        
    </body>
</html>
