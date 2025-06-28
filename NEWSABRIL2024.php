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
    <title>NewsLetter</title>
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header" id="header">
        <nav class="nav container__nav">
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
    <div class="title">
        <div class="news-link">
            <a href="index.html">www.josuermzmissions.000webhostapp.com</a>
        </div>
        <hr class="hr1">
        <h1><?php echo $palabras['NEWSLETTER']['title'] ?></h1>
        <p class="ad"><?php echo $palabras['NEWSABRIL2024']['versiculo'] ?></p>
        <h2 class="date"><?php echo $palabras['NEWSABRIL2024']['fecha'] ?></h2>
        <h2 class="edition"><?php echo $palabras['NEWSABRIL2024']['edicion'] ?></h2>
        <hr class="hr2">
    </div>
    <h1>ABRIL</h1>
    <div class="container">
        <div class="lateral-i">
            <div class="p-1">
                <h4><?php echo $palabras['NEWSABRIL2024']['t1'] ?></h4>
                <p>
                    <?php echo $palabras['NEWSABRIL2024']['d2'] ?>
                </p>
            </div>
            <div class="p-2">
                <img class="image-1" src="assets/img/abril1.jpg" alt="" srcset="">
            </div>
        </div>
        <div class="lateral-d">
            <div class="c1">
                <img class="image-2" src="assets/img/abril2.jpg" alt="" srcset="">
                <div>
                    <h4><?php echo $palabras['NEWSABRIL2024']['t2'] ?></h4>
                    <p>
                        <?php echo $palabras['NEWSABRIL2024']['d2'] ?>
                    </p>
                </div>
                
            </div>
            <div class="c2">
                <img class="image-3" src="assets/img/abril3.jpg">
                <div>
                    <h4><?php echo $palabras['NEWSABRIL2024']['t3'] ?></h4>
                    <p>
                        <?php echo $palabras['NEWSABRIL2024']['d3'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr3">
    <div class="page-no">
        <p>1</p>
    </div>
    <div class="container no-border">
        <div class="lateral-i">
            <div class="p-1">
                <h4><?php echo $palabras['NEWSABRIL2024']['t4'] ?></h4>
                <p>
                    <?php echo $palabras['NEWSABRIL2024']['d4'] ?>
                </p>
            </div>
            <div class="p-2">
                <img class="image-1" src="assets/img/abril4.jpg">
            </div>
        </div>
        <div class="lateral-d">
            <div class="c1">
                <img class="image-2" src="assets/img/abril5.jpg">
                <div>
                    <h4><?php echo $palabras['NEWSABRIL2024']['t5'] ?></h4>
                    <p>
                        <?php echo $palabras['NEWSABRIL2024']['d5'] ?>
                    </p>
                </div>
            </div>
            <div class="c2">
                <img class="image-3" src="assets/img/abril6.jpg">
                <div>
                    <h4><?php echo $palabras['NEWSABRIL2024']['t6'] ?></h4>
                    <p>
                        <?php echo $palabras['NEWSABRIL2024']['d6'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr3">
    <div class="page-no">
        <p>2</p>
    </div>
    <div class="container no-border">
        <div class="lateral-i">
            <div class="p-1">
                <h4><?php echo $palabras['NEWSABRIL2024']['t7'] ?></h4>
                <p>
                    <?php echo $palabras['NEWSABRIL2024']['d7'] ?>
                </p>
            </div>
            <div class="p-2">
                <img class="image-1" src="assets/img/abril7.jpg">
            </div>
        </div>
        <div class="lateral-d">
            <div class="c1">
                <img class="image-2" src="assets/img/abril9.jpg">
                <div>
                    <h4><?php echo $palabras['NEWSABRIL2024']['t8'] ?></h4>
                    <p>
                        <?php echo $palabras['NEWSABRIL2024']['d8'] ?>
                    </p>
                </div>
            </div>
            <div class="c2">
                <img class="image-3" src="assets/img/abril8.jpg">
                <div>
                    <h4><?php echo $palabras['NEWSABRIL2024']['t9'] ?></h4>
                    <p>
                        <?php echo $palabras['NEWSABRIL2024']['d9'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr3">
    <div class="page-no end">
        <p>3</p>
    </div>
    <!--<p class="caption-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, repellat? Praesentium repellat officia beatae doloribus rem, at veritatis vitae soluta maxime adipisci id maiores reiciendis explicabo commodi nihil ducimus. Quos.</p>!-->

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>
</html>