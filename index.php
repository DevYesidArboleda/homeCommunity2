<?php
    include "config.php"
?>
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
    <body class="demo-2 loading">
        <main>
            <div class="morph-wrap">
                <svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
                    <path d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z"/>
                </svg>
            </div>
            <div class="content-video content-wrap">
              <video id="video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="<?php bloginfo('template_url'); ?>/img/ILA_PROMO_EDIT_H265_6.0.mp4" type="video/mp4">
              </video>

              <div class="pull-center-header">
                <h1 class="title tk-jaf-domus-titling-web">
                  <div class="logo-header">
                    <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/Symbol.png" width="60%" alt="logo header" />
                  </div>
                </h1>
                <hr>
                <h2 class="description tk-jaf-domus-titling-web">De Octubre 31 al 02 de Noviembre 2019</h2>
                <a class="button" id="openModal"><?php echo $lang['video']?></a>
              </div>
              
              <!-- The modal -->
              <div id="video_modal" class="modal">
                <!-- The modal content -->
                <div class="modal-content">
                  <span class="close-modal">&times;</span>
                  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                  <source src="<?php bloginfo('template_url'); ?>/img/ILA_PROMO_EDIT_H265_6.0.mp4" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
            <div class="content content--fixed">
                <header class="codrops-header">
                    <h1 class="codrops-header__title tk-jaf-domus-titling-web"> 
                    <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/logo.png" width="20%"/>
                    </h1>
                    
                </header>
                <div class="pull-right">
                  <a class="button" href="https://www.ticketcode.co/eventos/ila19" target="_blank">comprar boletas</a>
                  <a href="index.php?lang=es"><?php echo $lang['lang_es'] ?>
                  <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?>
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
            <div class="social-bar">
              <a href="https://www.instagram.com/ila19medellin/?hl=es-la" class="icon icon-instagram" target="_blank"></a>
              <a href="https://twitter.com/ILA19Medellin" class="icon icon-twitter" target="_blank"></a>
              <a href="https://co.linkedin.com/company/ixdamedellin" class="icon icon-linkedin1" target="_blank"></a>
              <a href="mailto:news@ila19.ixdamedellin.co" class="icon icon-mail4" target="_blank"></a>
            </div>
            <div class="content-wrap" id="que_es">
                <div class="content content--layout">
                    <img class="content__img" src="<?php bloginfo('template_url'); ?>/img/image2/4.jpg" alt="Some image" />
                    <div class="content_info que-es">
                      <div class="content_header" style="background-color: #FF8800;">
                        <h3 class="content__title tk-jaf-domus-titling-web">ILA19</h3>
                      </div>
                      <div class="content_body">
                        <p class="content__desc" align="left"><?php echo $lang['ila1']?>
                        <br>
                        <?php echo $lang['ila2']?>                        <br>
                        <?php echo $lang['ila3']?>                      </div>
                      
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
                        <p class="content__desc" style="text-align: left;"><?php echo $lang['med1']?>    
                        <br>
                        <?php echo $lang['med2']?>                          </div>
                    </div>
                </div>
            </div>
            
            <div class="content-wrap" id="boleteria">
                <div class="content content--layout content--layout-3">
                    <img class="content__img" src="<?php bloginfo('template_url'); ?>/img/image2/5.jpg" alt="Some image" />
                    <div class="content_info boleteria">
                      <div class="content-header" style="background-color: #C10FC9;">
                        <h3 class="content__title tk-jaf-domus-titling-web"><?php echo $lang['bol']?> </h3>
                      </div>
                      <div class="content_body">
                        <p class="content__desc" align="left"><?php echo $lang['bol1']?><br>
                        <?php echo $lang['bol3']?></p>
                        <ul class="timeline">
                          <li>
                            <p style="color: black; text-align: left;"><?php echo $lang['bol4']?></p>
                            <p style="color: black; text-align: left; font-weight: 100px;"> $ 100 USD</p>
                          </li>
                          <li>
                            <p style="color: black; text-align: left;"><?php echo $lang['bol5']?></p>
                            <p style="color: black; text-align: left; font-weight: 100px;"> $ 225 USD</p>
                          </li>
                          
                        </ul>

                        <a class="button" href="https://www.ticketcode.co/eventos/ila19"><?php echo $lang['videobuy']?></a>
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
              <div class="content-wrap footer">
                <br><br>
                <h1 class="tk-jaf-domus-titling-web"><?php echo $lang['pat1']?></h1>
                <div class="logo-footer">
                  <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/patrocinador_footer.png" alt="logo footer" />
                </div>
                <hr>
                <div class="footer-content">
                  <a class="button"><?php echo $lang['pat']?></a>
                  <p>
                  <?php echo $lang['der2']?> <span>ixda.org</span>
                  </p>&nbsp;&nbsp;&nbsp;
                  <p>
                  <?php echo $lang['der1']?> <span>ila19@ixda.org</span>
                  </p>&nbsp;&nbsp;&nbsp;
                  <p>
                    Local <span>IxDA Medellin</span>
                  </p>&nbsp;&nbsp;&nbsp;
                </div>
                 <br>
                 <h2 style="font-weight: bold; text-transform: uppercase;" class="tk-jaf-domus-titling-web">suscribete a nuestro newsletter</h2>
                <div class="footer-content">
                  <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
                </div>

                <br>
                <div class="footer-content">
                  <div class="logo-footer">
                    <img src="<?php bloginfo('template_url'); ?>/img/image2/ixda_logos/logo_footer.png" alt="logo footer" />
                  </div>
                </div>
                <br><br>
                <h3 style="font-weight: bold;"><?php echo $lang['videobuy']?></h3>
              </div>
            </section>

        </main>
        <?php wp_footer(); ?>
        <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/anime.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/scrollMonitor.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/demo2.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        
    </body>
</html>
