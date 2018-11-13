<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ILA19</title>
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
                <h1 class="title">interaction</h1>
                <hr>
                <h2 class="description">Latin america</h2>
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
                    <h1 class="codrops-header__title">ILA19</h1>

                </header>
                <div class="pull-right">
                  <a class="button">comprar boleteria</a>
                </div>
                <a class="pater" id="open_nav" href="#" onclick="openNav()">
                    <span class="open_btn" >&#9776;</span>
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
                        <h3 class="content__title">ILA19</h3>
                      </div>
                      <div class="content_body">
                        <p class="content__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      
                    </div>
                    
                </div>
            </div>
            <div class="content-wrap" id="lugar">
                <div class="content content--layout content--layout-2">
                    <img class="content__img" src="<?php bloginfo('template_url'); ?>/img/image2/2.jpg" alt="Some image" />
                    <div class="content_info lugar">
                      <div class="content_header" style="background-color: #00A3BB;">
                        <h3 class="content__title">Medellín</h3>
                      </div>
                      <div class="content_body">
                        <p class="content__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
            <div class="container" id="boleteria">
                <div class="content content--layout content--layout-3">
                    <img class="content__img" src="<?php bloginfo('template_url'); ?>/img/image2/5.jpg" alt="Some image" />
                    <div class="content_info boleteria">
                      <div class="content-header" style="background-color: #C10FC9;">
                        <h3 class="content__title">Boleteria</h3>
                      </div>
                      <div class="content_body">
                        <p class="content__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                        <ul class="timeline">
                          <li>
                            <p style="color: black; text-align: left;">March, 2014</p>
                            <p style="color: black; text-align: left; font-weight: 100px;"> $ 0000000</p>
                          </li>
                          <li>
                            <p style="color: black; text-align: left;">March, 2014</p>
                            <p style="color: black; text-align: left; font-weight: 100px;"> $ 0000000</p>
                          </li>
                          <li>
                            <p style="color: black; text-align: left;">April, 2014</p>
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
                <h3 style="font-weight: bold;">PATROCINADORES</h3>
                <hr>
                <div class="footer-content">
                  <a class="button">conviertete en patrocinador</a>
                  <p>
                    Organizado por <span>ixda.org</span>
                  </p>
                  <p>
                    Mantenerse en contacto <span>ila19@ixda.org</span>
                  </p>
                  <p>
                    Local <span>IxDA Medellin</span>
                  </p>
                </div>
                 <br>
                 <h2 style="font-weight: bold; text-transform: uppercase;">suscribete a nuestro newsletter</h2>
                <div class="footer-content">

                  <form class="form-inline" method="post" action="send_email.php">
                    <input type="text" id="name" placeholder="nombre.." name="name" required />
                    
                    <input type="email" id="email" placeholder="email.." name="email" required />
                    
                    <button type="submit">Enviar</button>
                  </form>
                </div>

                <br>
                <div class="footer-content">
                  <div class="logo-footer">
                    logo
                  </div>
                </div>
                <br><br>
                <h3 style="font-weight: bold;">Todo los derechos reservados 2018.</h3>
              </div>
            </section>

        </main>

        <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/anime.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/scrollMonitor.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/demo2.js"></script>
    </body>
</html>