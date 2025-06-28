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
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>News - Josué Ramírez</title>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header header-pages" id="header">
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
                  <i class="ri-apps-2-line"></i>
               </div>
            </div>
         </nav>
      </header>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== WORK ====================-->
         <section class="work section">
            <h2 class="section__title">
               <?php echo $palabras['news']['newst'] ?>
            </h2>

            <div class="work__container work__page container grid">
               <article class="work__card">
                  <a href="EFM2024.php" target="_blank" class="work__link">
                     <img src="assets/img/newsletter1.jpg" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title"><?php echo $palabras['news']['news_newslt1'] ?></h2>
                  <span class="work__subtitle"><?php echo $palabras['news']['news_newsld1'] ?></span>
               </article>

               <article class="work__card">
                  <a href="NEWSABRIL2024.php" target="_blank" class="work__link">
                     <img src="assets/img/abriltitle.jpg" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title"><?php echo $palabras['news']['news_newslt2'] ?></h2>
                  <span class="work__subtitle"><?php echo $palabras['news']['news_newsld2'] ?></span>
               </article>

               <article class="work__card">
                  <a href="NEWSMJ2024.php" target="_blank" class="work__link">
                     <img src="assets/img/cnmj.jpg" alt="" class="work__img">
                     <i class="ri-arrow-right-circle-line work__icon"></i>
                  </a>

                  <h2 class="work__title"><?php echo $palabras['news']['news_newslt3'] ?></h2>
                  <span class="work__subtitle"><?php echo $palabras['news']['news_newsld3'] ?></span>
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
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div class="footer__content grid">
               <a href="index.php" class="footer__logo">Josué Rmz</a>

               <ul class="footer__links">
                  <li>
                     <a href="index.php" class="footer__link"><?php echo $palabras['footer']['menu_home'] ?></a>
                  </li>
                  <li>
                     <a href="about.php" class="footer__link"><?php echo $palabras['footer']['menu_aboutme'] ?></a>
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

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>