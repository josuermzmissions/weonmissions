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

      <title>About - Josué Ramírez</title>
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
         <!--==================== ABOUT ====================-->
         <section class="about section">
            <h2 class="section__title">
               <?php echo $palabras['aboutme']['about'] ?>
            </h2>

            <div class="about__container about__page container grid">
               <div class="about__perfil perfil">
                  <div class="perfil__content">
                     <img src="assets/img/home-perfilj.png" alt="image" class="perfil__img">
                  </div>
               </div>

               <div class="about__content grid">
                  <div class="about__data grid">
                     <div class="about__info grid">
                        <h1 class="about__name">Josué Ramírez</h1>
                        <h2 class="about__profession"><?php echo $palabras['aboutme']['about_ocupacion'] ?></h2>
                        <p class="about__description">
                           <?php echo $palabras['aboutme']['about_description'] ?>
                        </p>
                     </div>
   
                     <a href="contact.php" class="about__button button"><?php echo $palabras['aboutme']['about_contactme'] ?></a>
   
                     <!--<div class="about__skills">
                        <h3 class="about__skills-title">My Skills Are
                        </h3>
   
                        <div class="about__skills-content grid">
                           <img src="assets/img/about-html.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-css.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-javascript.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-git.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-react.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-github.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-next-js.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-sass.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-tailwind-css.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-figma.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-sketch.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-photoshop.svg" alt="image" class="about__skills-img">
                           <img src="assets/img/about-illustrator.svg" alt="image" class="about__skills-img">
                        </div>
                     </div>-->
                  </div>
               </div>
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

      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>