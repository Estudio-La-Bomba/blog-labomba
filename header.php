<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <!-- Required meta tags -->
  <meta <?php bloginfo('charset');?>>
  <!-- Viewport for responsive web design -->
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link rel="apple-touch-icon" sizes="57x57" href="./assets/img/fav/apple-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="./assets/img/fav/apple-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="./assets/img/fav/apple-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/fav/apple-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="./assets/img/fav/apple-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="./assets/img/fav/apple-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="./assets/img/fav/apple-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="./assets/img/fav/apple-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/img/fav/apple-icon-180x180.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="./assets/img/fav/android-icon-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/fav/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="96x96" href="./assets/img/fav/favicon-96x96.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/fav/favicon-16x16.png" />
  <link rel="manifest" href="./assets/img/fav/manifest.json" />
  <meta name="msapplication-TileImage" content="./assets/img/fav/ms-icon-144x144.png" />

  <!-- Microsoft Tiles -->
  <meta name="msapplication-config" content="browserconfig.xml" />

  <meta name="theme-color" content="#000" />
  <meta name="msapplication-TileColor" content="#000" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#000" />

  <!-- Facebook -->
  <meta property="og:url" content="https://blog.estudiolabomba.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Blog - Estúdio La.Bomba" />
  <meta property="og:description"
    content="O Estúdio La.Bomba é um escritório de design focado em marcas, o estúdio busca trazer resultados para seus clientes através do design estratégico e branding, acrescentando o toque artístico que está presente em sua essência, colaborando para que as marcas atinjam seus objetivos." />
  <meta property="og:image" content="https://www.behance.net/gallery/91811221/Nova-identidade-visual-Macrilan" />

  <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/labomba.min.css" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

  <?php wp_head();?>
</head>

<body>

  <?php if (!is_single()) {?>
    <div id="loading">
      <img id="loading-image" src="<?php bloginfo('template_directory')?>/assets/img/loader.gif" alt="Loading..." />
    </div>
  <?php }?>

  <div class="container <?php if (is_single()) {echo "article-show";}?>">
    <nav>
      <a href="/" class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" width="189" height="31.82" viewBox="0 0 189 31.82">
          <defs>
            <style>
            .a {
              fill: #fff;
            }
            </style>
          </defs>
          <g transform="translate(-1039 -966.439)">
            <path class="a" d="M1242.68,998.272l1.677-4.253h12.491l1.687,4.253h4.617L1250.6,966.583l-12.541,31.689Z"
              transform="translate(-35.153 -0.025)" />
            <path class="a"
              d="M1213.134,998.379v-31.26h8.22a8.592,8.592,0,0,1,6.315,2.6,8.768,8.768,0,0,1,.174,12.324,8.849,8.849,0,0,1,1.463,13.739,8.67,8.67,0,0,1-6.315,2.6Z"
              transform="translate(-30.751 -0.12)" />
            <path class="a" d="M1176.07,998.377h-4.255V967.1l14.874,22.5,14.855-22.5v31.273H1176.07Z"
              transform="translate(-23.454 -0.117)" />
            <path class="a" d="M1057.289,998.369H1039V967.118h4.293v27.065h14Z" transform="translate(0 -0.12)" />
            <path class="a" d="M1085.648,994.068h-12.7l-1.567,4.137h-4.7l12.612-31.766,12.635,31.817-4.631,0Z"
              transform="translate(-4.889)" />
            <path class="a"
              d="M1104.01,1003.081a2.515,2.515,0,0,1-1.867.79,2.663,2.663,0,0,1-1.906-.79,2.62,2.62,0,0,1-.79-1.886,2.528,2.528,0,0,1,.79-1.886,2.588,2.588,0,0,1,1.906-.79,2.7,2.7,0,0,1,2.656,2.676A2.546,2.546,0,0,1,1104.01,1003.081Z"
              transform="translate(-10.675 -5.665)" />
            <path class="a"
              d="M1108.071,998.379v-31.26h8.221a8.593,8.593,0,0,1,6.315,2.6,8.767,8.767,0,0,1,.173,12.324,8.849,8.849,0,0,1,1.463,13.739,8.668,8.668,0,0,1-6.315,2.6Z"
              transform="translate(-12.198 -0.12)" />
            <path class="a" d="M1137.491,993.328a14.745,14.745,0,1,1,10.446,4.329A14.236,14.236,0,0,1,1137.491,993.328Z"
              transform="translate(-16.628 -0.301)" />
          </g>
        </svg>
      </a>
      <div class="buttons">
        <div class="theme-switcher">
          <div class="theme-switcher-button-wrap">
            <div class="theme-switcher-button-bg">
              <div class="theme-switcher-button-switch"></div>
            </div>
          </div>
        </div>

        <a href="https://www.estudiolabomba.com/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="29.25" height="27" viewBox="0 0 29.25 27">
            <defs>
              <style>
              .a {
                fill: #fff;
              }
              </style>
            </defs>
            <path class="a" d="M14.625,31.5v-9h6.75v9h6.862V18h4.388L18,4.5,3.375,18H7.762V31.5Z"
              transform="translate(-3.375 -4.5)" />
          </svg>
        </a>
      </div>
    </nav>
