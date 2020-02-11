<?php if (!is_home()) {?>
<div class="clearfix"></div>
<footer class="container <?php if (is_category()) {echo 'category-footer';}?>">
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

  <p>todos os direitos reservados.</p>
</footer>

<?php }?>


<?php wp_footer()?>

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<script src="<?php bloginfo('template_directory')?>/assets/js/main.js"></script>


</body>

</html>