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

        <a href="https://www.estudiolabomba.com/metodologia.html" target="_blank" class="menu-link">Nosso Universo</a>
        <a href="https://www.estudiolabomba.com/cases.html" target="_blank" class="menu-link">Cases</a>
        <a href="https://www.estudiolabomba.com/contato.html" target="_blank" class="menu-link">Contato</a>

        <ul class="social">
          <li>
            <a href="https://www.instagram.com/estudio.labomba/?hl=pt-br" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="35.885" height="35.877" viewBox="0 0 35.885 35.877">
                <defs>
                  <style>
                  .yellow {
                    fill: #e1e31c;
                  }
                  </style>
                </defs>
                <path class="yellow"
                  d="M17.941,10.978a9.2,9.2,0,1,0,9.2,9.2A9.184,9.184,0,0,0,17.941,10.978Zm0,15.179a5.98,5.98,0,1,1,5.98-5.98,5.991,5.991,0,0,1-5.98,5.98ZM29.662,10.6a2.146,2.146,0,1,1-2.146-2.146A2.141,2.141,0,0,1,29.662,10.6Zm6.092,2.178c-.136-2.874-.793-5.42-2.9-7.517s-4.643-2.754-7.517-2.9c-2.962-.168-11.84-.168-14.8,0-2.866.136-5.412.793-7.517,2.89S.265,9.9.121,12.771c-.168,2.962-.168,11.84,0,14.8.136,2.874.793,5.42,2.9,7.517s4.643,2.754,7.517,2.9c2.962.168,11.84.168,14.8,0,2.874-.136,5.42-.793,7.517-2.9s2.754-4.643,2.9-7.517c.168-2.962.168-11.832,0-14.794ZM31.927,30.752a6.054,6.054,0,0,1-3.41,3.41c-2.362.937-7.966.721-10.575.721s-8.222.208-10.575-.721a6.054,6.054,0,0,1-3.41-3.41c-.937-2.362-.721-7.966-.721-10.575S3.027,11.955,3.956,9.6a6.054,6.054,0,0,1,3.41-3.41c2.362-.937,7.966-.721,10.575-.721s8.222-.208,10.575.721a6.054,6.054,0,0,1,3.41,3.41c.937,2.362.721,7.966.721,10.575S32.864,28.4,31.927,30.752Z"
                  transform="translate(0.005 -2.238)" />
              </svg>
            </a>
          </li>
          <li>
            <a href="https://www.linkedin.com/company/est%C3%BAdio-la-bomba/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="35.865" height="35.865" viewBox="0 0 35.865 35.865">
                <defs>
                  <style>
                  .yellow {
                    fill: #e1e31c;
                  }
                  </style>
                </defs>
                <path class="yellow"
                  d="M33.3,2.25H2.554A2.573,2.573,0,0,0,0,4.836V35.529a2.573,2.573,0,0,0,2.554,2.586H33.3a2.58,2.58,0,0,0,2.562-2.586V4.836A2.58,2.58,0,0,0,33.3,2.25ZM10.84,32.992H5.524V15.876h5.324V32.992ZM8.182,13.538a3.082,3.082,0,1,1,3.082-3.082,3.084,3.084,0,0,1-3.082,3.082ZM30.766,32.992H25.45V24.666c0-1.985-.04-4.539-2.762-4.539-2.77,0-3.194,2.162-3.194,4.4v8.47H14.178V15.876h5.1v2.338h.072a5.6,5.6,0,0,1,5.036-2.762c5.38,0,6.381,3.547,6.381,8.158Z"
                  transform="translate(0 -2.25)" />
              </svg>
            </a>
          </li>
        </ul>

        <div class="theme-switcher">
          <div class="theme-switcher-button-wrap">
            <div class="theme-switcher-button-bg">
              <div class="theme-switcher-button-switch"></div>
            </div>
          </div>
        </div>
      </div>
    </nav>
