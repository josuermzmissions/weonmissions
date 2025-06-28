<?php
   session_start( );
   $idioma = $_SESSION['lang'] ?? 'en';

   /*$archivo = file_exists("assets/idiomas/$idioma.ini") ? "assets/idiomas/$idioma.ini" : "assets/idiomas/en.ini";

   $palabras = parse_ini_file($archivo);
   var_dump($palabras);*/

   $archivo = file_exists("assets/idiomas/$idioma.json") ? "assets/idiomas/$idioma.json" : "assets/idiomas/en.json";

   $contenido = file_get_contents($archivo);
   $palabras = json_decode($contenido,true);
   //var_dump($palabras);
   //var_dump($idioma);
?>
<!DOCTYPE html>
   <html lang="<?php echo $idioma ?>">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Josué Ramírez</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="index.php" class="nav__logo">Josué Rmz</a>

            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="index.php" class="nav__link"><?php echo $palabras['header']['menu_home'] ?></a>
                  </li>
                  <li class="nav__item">
                     <a href="about.php" class="nav__link"><?php echo $palabras['header']['menu_aboutme'] ?></a>
                  </li>
                  <li class="nav__item">
                     <a href="work.php" class="nav__link"><?php echo $palabras['header']['menu_newsletter'] ?></a>
                  </li>
                  <li class="nav__item">
                     <a href="donate.php" class="nav__link"><?php echo $palabras['header']['menu_donate'] ?></a>
                  </li>
                  <li class="nav__item">
                     <a href="contact.php" class="button"><?php echo $palabras['header']['menu_contactme'] ?></a>
                  </li>
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">
               <div class="nav__dropdown">
                  <button><?php echo $palabras['config']['tlg'] ?> <i class="ri-arrow-drop-down-line"></i></button>
                  <div class="dropdown-content">
                     <a href="lang.php?l=<?php echo $palabras['config']['lg'] == 'es' ? 'en' : 'es' ?>"><?php echo $palabras['config']['idioma'] ?></a>
                     <!--<a href="lang.php?l=en">Ingles</a>
                     <a href="https://www.youtube.com/user/hubspot">YouTube</a>-->
                  </div>
               </div>

               <!-- Theme button -->
               <i class="ri-moon-line change-theme" id="theme-button"></i>
               
               <!-- Toggle buttom -->
               <div class="nav__toggle" id="nav-toggle">
                  <!--<i class="ri-apps-2-line"></i>-->
                  <i class="ri-menu-line"></i>
               </div>
            </div>

         </nav>
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section">
            <div class="home__rectangle"></div>

            <div class="home__container container grid">
               <div class="home__perfil perfil">
                  <div class="perfil__content">
                     <img src="assets/img/home-perfilj.png" alt="" class="perfil__img">
                  </div>
               </div>

               <div class="home__content grid">
                  <div class="home__data grid">
                     <h1 class="home__name">Josué Ramírez</h1>

                     <h2 class="home__profession"><?php echo $palabras['home']['home_ocupacion'] ?></h2>

                     <div class="home__social">
                        <!--<a href="https://github.com/" target="_blank" class="home__social-link">
                           <i class="ri-github-fill"></i>
                        </a>

                        <a href="https://www.linkedin.com/" target="_blank" class="home__social-link">
                           <i class="ri-linkedin-box-fill"></i>
                        </a>

                        <a href="https://dribbble.com/" target="_blank" class="home__social-link">
                           <i class="ri-dribbble-line"></i>
                        </a>!-->
                        <a href="https://www.facebook.com/josuee.rmz?rdid=Xg1TlquVQJVjXDRm" target="_blank" class="home__social-link">
                           <i class="ri-facebook-circle-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/josueermz" target="_blank" class="home__social-link">
                           <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/josueermzq" target="_blank" class="home__social-link">
                           <i class="ri-twitter-x-fill"></i>
                        </a>
                     </div>
                  </div>

                  <!--<a href="assets/pdf/Liz-Cv.pdf" download="" class="home__button button">Download CV</a>-->
                  <a href="about.php" class="home__button button"><?php echo $palabras['home']['home_aboutme'] ?></a>

               </div>
            </div>
         </section>

         <!--==================== SERVICES ====================-->
         <section class="services section">
            <h2 class="section__title">
               <?php echo $palabras['home']['home_escuela'] ?>
            </h2>

            <div class="services__container container grid">
               <article class="services__card">
                  <!--<i class="ri-code-s-slash-line services__icon"></i>-->
                  <i class="ri-team-line services__icon"></i>
                  <h2 class="services__title"><?php echo $palabras['home']['home_dts'] ?></h2>
                  <p class="services__description">
                     <?php echo $palabras['home']['home_dtsd'] ?>
                  </p>

                  <button class="services__button button"><?php echo $palabras['home']['home_dtsc'] ?></button>

                  <div class="services__modal">
                     <div class="services__modal-content">
                        <i class="ri-close-line services__modal-close"></i>

                        <h2 class="services__modal-title"><?php echo $palabras['home']['home_dts'] ?></h2>

                        <ul class="services__modal-list-grid">
                           <li class="services__modal-item">
                              <?php echo $palabras['home']['home_dtsi1'] ?>
                           </li>
                           <li class="services__modal-item">
                              <?php echo $palabras['home']['home_dtsi2'] ?>
                           </li>
                           <li class="services__modal-item">
                              <?php echo $palabras['home']['home_dtsi3'] ?>
                           </li>
                           <li class="services__modal-item">
                              <?php echo $palabras['home']['home_dtsi4'] ?>
                           </li>
                        </ul>
                     </div>
                  </div>
               </article>

               <article class="services__card">
                  <!--<i class="ri-pen-nib-line services__icon"></i>-->
                  <i class="ri-book-2-line services__icon"></i>
                  <h2 class="services__title"><?php echo $palabras['home']['home_bsn'] ?></h2>
                  <p class="services__description">
                     <?php echo $palabras['home']['home_bsnd'] ?>
                  </p>

                  <button class="services__button button"><?php echo $palabras['home']['home_bsnc'] ?></button>

                  <div class="services__modal">
                     <div class="services__modal-content">
                        <i class="ri-close-line services__modal-close"></i>

                        <h2 class="services__modal-title"><?php echo $palabras['home']['home_bsn'] ?></h2>

                        <ul class="services__modal-list-grid">
                           <li class="services__modal-item">
                              <?php echo $palabras['home']['home_bsni1'] ?>
                           </li>
                           <li class="services__modal-item">
                              <?php echo $palabras['home']['home_bsni2'] ?>
                           </li>
                           <!--<li class="services__modal-item">
                              I position your website with advanced SEO.
                           </li>
                           <li class="services__modal-item">
                              I solve performance problems on web pages.
                           </li>-->
                        </ul>
                     </div>
                  </div>
               </article>

               <article class="services__card">
                  <!--<i class="ri-layout-2-line services__icon"></i>-->
                  <i class="ri-hand-coin-line services__icon"></i>
                  <h2 class="services__title"><?php echo $palabras['home']['home_tbs'] ?></h2>
                  <p class="services__description">
                     <?php echo $palabras['home']['home_tbsd'] ?>
                  </p>

                  <button class="services__button button"><?php echo $palabras['home']['home_tbsc'] ?></button>

                  <div class="services__modal">
                     <div class="services__modal-content">
                        <i class="ri-close-line services__modal-close"></i>

                        <h2 class="services__modal-title"><?php echo $palabras['home']['home_tbs'] ?></h2>

                        <ul class="services__modal-list-grid">
                           <li class="services__modal-item">
                              <?php echo $palabras['home']['home_tbsi1'] ?>
                           </li>
                           <li class="services__modal-item">
                              <?php echo $palabras['home']['home_tbsi2'] ?>
                           </li>
                           <!--<li class="services__modal-item">
                              I position your website with advanced SEO.
                           </li>
                           <li class="services__modal-item">
                              I solve performance problems on web pages.
                           </li>-->
                        </ul>
                     </div>
                  </div>
               </article>
            </div>
         </section>

         <!--==================== WORK ====================-->
         <section class="work section">
            <h2 class="section__title">
               <?php echo $palabras['home']['home_news'] ?>
            </h2>

            <div class="work__container container grid">
               <article class="work__card">
                  <a href="EFM2024.php" target="_blank" class="work__link">
                     <img src="assets/img/newsletter1.jpg" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title"><?php echo $palabras['home']['home_newslt1'] ?></h2>
                  <span class="work__subtitle"><?php echo $palabras['home']['home_newsld1'] ?></span>
               </article>

               <article class="work__card">
                  <a href="NEWSABRIL2024.php" target="_blank" class="work__link">
                     <img src="assets/img/abriltitle.jpg" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title"><?php echo $palabras['home']['home_newslt2'] ?></h2>
                  <span class="work__subtitle"><?php echo $palabras['home']['home_newsld2'] ?></span>
               </article>

               <article class="work__card">
                  <a href="NEWSMJ2024.php" target="_blank" class="work__link">
                     <img src="assets/img/cnmj.jpg" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title"><?php echo $palabras['home']['home_newslt3'] ?></h2>
                  <span class="work__subtitle"><?php echo $palabras['home']['home_newsld3'] ?></span>
               </article>

               <!--<article class="work__card">
                  <a href="#" target="_blank" class="work__link">
                     <img src="assets/img/work-2.png" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title">Creative Website</h2>
                  <span class="work__subtitle">Website Design</span>
               </article>

               <article class="work__card">
                  <a href="#" target="_blank" class="work__link">
                     <img src="assets/img/work-3.png" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title">Awesome App</h2>
                  <span class="work__subtitle">App Design</span>
               </article>

               <article class="work__card">
                  <a href="#" target="_blank" class="work__link">
                     <img src="assets/img/work-4.png" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title">Awesome App</h2>
                  <span class="work__subtitle">App Design</span>
               </article>

               <article class="work__card">
                  <a href="#" target="_blank" class="work__link">
                     <img src="assets/img/work-5.png" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title">Interface Design</h2>
                  <span class="work__subtitle">UI/UX</span>
               </article>

               <article class="work__card">
                  <a href="#" target="_blank" class="work__link">
                     <img src="assets/img/work-6.png" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title">Interface Design</h2>
                  <span class="work__subtitle">UI/UX</span>
               </article>-->
            </div>
         </section>

         <!--==================== TESTIMONIAL ====================-->
         <!--<section class="testimonial section">
            <h2 class="section__title">
               What They Say <br> About Me? 
            </h2>

            <div class="testimonial__container container">
               <div class="testimonial__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="testimonial__card swiper-slide">
                        <div class="testimonial__border">
                           <img src="assets/img/testimonial-1.png" alt="image" class="testimonial__img">
                        </div>

                        <h2 class="testimonial__name">Jen Will</h2>
                        <p class="testimonial__description">
                           I hired a project and the services were of 
                           quality, the work delivered is of good 
                           content, excellent work.
                        </p>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <div class="testimonial__border">
                           <img src="assets/img/testimonial-2.png" alt="image" class="testimonial__img">
                        </div>

                        <h2 class="testimonial__name">Rial Loz</h2>
                        <p class="testimonial__description">
                           I hired a project and the services were of 
                           quality, the work delivered is of good 
                           content, excellent work.
                        </p>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <div class="testimonial__border">
                           <img src="assets/img/testimonial-3.png" alt="image" class="testimonial__img">
                        </div>

                        <h2 class="testimonial__name">Mey Doth</h2>
                        <p class="testimonial__description">
                           I hired a project and the services were of 
                           quality, the work delivered is of good 
                           content, excellent work.
                        </p>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <div class="testimonial__border">
                           <img src="assets/img/testimonial-4.png" alt="image" class="testimonial__img">
                        </div>

                        <h2 class="testimonial__name">Celi Phet</h2>
                        <p class="testimonial__description">
                           I hired a project and the services were of 
                           quality, the work delivered is of good 
                           content, excellent work.
                        </p>
                     </article>
                  </div>
                  
                  <div class="swiper-pagination"></div>
               </div>
            </div>
         </section>-->

         <!--==================== CONTACT ====================-->
         <section class="contact section">
            <div class="contact__container container grid">
               <h2 class="section__title">
                  <?php echo $palabras['home']['home_contact'] ?>
               </h2>

               <a href="contact.php" class="contact__button button"><?php echo $palabras['home']['home_contactme'] ?></a>
            </div>
         </section>
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div class="footer__content grid">
               <a href="index.php" class="footer__logo">Josué Rmz</a>

               <ul class="footer__links">
                  <li>
                     <a href="about.php" class="footer__link"><?php echo $palabras['footer']['menu_aboutme'] ?></a>
                  </li>
                  <li>
                     <a href="work.php" class="footer__link"><?php echo $palabras['footer']['menu_newsletter'] ?></a>
                  </li>
                  <li>
                     <a href="donate.php" class="footer__link"><?php echo $palabras['footer']['menu_donate'] ?></a>
                  </li>
                  <li>
                     <a href="contact.php" class="footer__link"><?php echo $palabras['footer']['menu_contactme'] ?></a>
                  </li>
               </ul>

               <div class="footer__social">
                  <a href="https://www.facebook.com/josuee.rmz?rdid=Xg1TlquVQJVjXDRm" target="_blank" class="footer__social-link">
                     <i class="ri-facebook-circle-fill"></i>
                  </a>
                  <a href="https://www.instagram.com/josueermz" target="_blank" class="footer__social-link">
                     <i class="ri-instagram-fill"></i>
                  </a>
                  <a href="https://twitter.com/josueermzq" target="_blank" class="footer__social-link">
                     <i class="ri-twitter-x-fill"></i>
                  </a>
                  <!--<a href="https://www.linkedin.com/" target="_blank" class="footer__social-link">
                     <i class="ri-linkedin-box-fill"></i>
                  </a>!-->
               </div>
            </div>

            <span class="footer__copy">
               &#169; <?php echo $palabras['derechos']['derechosr'] ?>
            </span>
         </div>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>

      <!--=============== SWIPER JS ===============-->
      <script src="assets/js/swiper-bundle.min.js"></script>

      <!--=============== INDEX JS ===============-->
      <script src="assets/js/index.js"></script>
   </body>
</html>