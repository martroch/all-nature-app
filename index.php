<?php $title="All Nature App";?>
<?php $active="home";?>
<?php $path="";?>
<?php include('php/head.php')?>

<body>
  <?php include('php/nav.php')?>
  <div class="intro-page">
    <video autoplay muted loop id="background-video" class="background-video">
      <source src="resources/sea-video.webm" type="video/webm">
    </video>
    <div class="content-home">
      <h1>RELÁJATE A TRAVÉS DE LA NATURALEZA</h1>
      <p class="intro">Descubre la app perfecta para reencontrarte con tú yo interior, relájate de forma inmersiva con la naturaleza gracias a los videos Full HD y sus sonidos o a través de una meditación guiada perfecta para encontrar la paz interior..</p>
    </div>
  </div>
  
  <section class="dowload">
    <div class="explanation">
      <img src="resources/dashed-line.svg" alt="line" height="100px">
      <h2>EXPLORA LA NATURALEZA A TRAVÉS DE TU MENTE</h2>
      <div class="traslate-text">
        <h3 >Con la APP All Natural conseguirás alcanzar la relajación a través de espacios naturales.</h3>
        <p>Disfruta de la naturaleza desde cualquier lugar. Consigue llegar a un punto de relajación óptimo mediante el odio y la vista. Los espacios naturales nos permiten conectar y son necesarios para nuestro bienestar mental y físico.</p>
        <div class="btns-dowload">
          <button class="btn-dowload">
            <img src="resources/apple.svg" alt="">
            Dowload on the<br> APP STORE</button>
          <button class="btn-dowload">
            <img src="resources/play-store.svg" alt="">
            Dowload on the<br> PLAY STORE</button>
        </div>
      </div>
      <img src="resources/dashed-line.svg" alt="line" height="100px">
    </div>
    <img src="resources/mobile-app.png" alt="mobile-app" width="350px">    
  </section>

  <section class="vd-text">
    <div class="vd-fire">
      <video autoplay muted loop id=""class="">
      <source src="resources/fire.webm" type="video/webm">
      </video>
    </div>
    <div>
      <h2 class="text-meditacion__title">MEDITACIÓN GUIADA CON LAS MEJORES VISTAS</h2>
      <p class="text-meditacion__desc">Déjate guiar por nuestra red de expertos en meditación. Concéntrate en los espacios naturales desde cualquier lugar y reconecta mentalmente con lo esencial. Vacía tu mente mediante la meditación centrada en la respiración y los sonidos</p>
      <button class="btn-organic btn-organic__left">
        <svg viewBox="0 0 157 70" class="svg-1">
        <path d="M59.1325 2.07707L59.1329 2.07715C65.8621 3.25698 72.67 4.37093 79.3962 5.47151C96.1038 8.20528 112.307 10.8565 125.545 14.23C134.829 16.5956 142.603 19.3049 148.046 22.6197C153.493 25.9363 156.5 29.7887 156.5 34.424C156.5 43.9587 147.981 52.7296 133.812 59.1454C119.688 65.5408 100.137 69.5 78.5 69.5C56.8633 69.5 37.3118 65.5408 23.1882 59.1454C9.01947 52.7296 0.5 43.9587 0.5 34.424C0.5 24.713 4.56945 14.7838 13.8882 8.20175C23.2125 1.61581 37.868 -1.67132 59.1325 2.07707Z"/>
        </svg>
        <p class="text-btn"> Saber más </p>
      </button>
    </div>
  </section>

  <section class="vd-text vd-text__cascada">
    <div class="vd-cascada">
      <video autoplay muted loop id=""class="">
      <source src="resources/cascada.webm" type="video/webm">
      </video>
    </div>
    <div class="content-cascada">
      <h2 class="text-cascada__title">NATURALEZA INMERSIVA SONIDOS 360º</h2>
      <p class="text-cascada__desc">Disfruta y relájate con la naturaleza y sus sonidos. Tú decides que lugares visitar y desde donde visitarlos para desconectar. <br> <br> Descubre hasta 150 lugares magníficos o incluye tu lugar idóneo para acceder a él en cualquier momento.</p>
      <button class="btn-organic btn-organic__right">
        <svg viewBox="0 0 157 70" class="svg-1">
        <path d="M59.1325 2.07707L59.1329 2.07715C65.8621 3.25698 72.67 4.37093 79.3962 5.47151C96.1038 8.20528 112.307 10.8565 125.545 14.23C134.829 16.5956 142.603 19.3049 148.046 22.6197C153.493 25.9363 156.5 29.7887 156.5 34.424C156.5 43.9587 147.981 52.7296 133.812 59.1454C119.688 65.5408 100.137 69.5 78.5 69.5C56.8633 69.5 37.3118 65.5408 23.1882 59.1454C9.01947 52.7296 0.5 43.9587 0.5 34.424C0.5 24.713 4.56945 14.7838 13.8882 8.20175C23.2125 1.61581 37.868 -1.67132 59.1325 2.07707Z"/>
        </svg>
        <p class="text-btn"> Saber más </p>
      </button>
    </div>
  </section>

  <section class="world">
  <div class="text-places">
    <h2 class="timer count-title count-number" data-to="300" data-speed="1500"></h2>
    <h2> 150 SITIOS QUE VISITAR POR EL MUNDO</h2>
    <P>Descubre todos los lugares en los que puedes relajarte. Videos Full HD realizados por nuestro equipo de grabación y fotografía, especilistas en espacios naturales. Si tienes tu propio lugar idílico añadelo y disfruta de el en todo momento. </P>
    <div class="btns-dowload">
      <button class="btn-dowload">
        <img src="resources/apple.svg" alt="">
        Dowload on the<br> APP STORE</button>
      <button class="btn-dowload">
        <img src="resources/play-store.svg" alt="">
        Dowload on the<br> PLAY STORE</button>
    </div>
  </div>
  <img src="resources/world.png" alt="image-world" class="img-world">
  </section>

  <?php include('php/footer.php')?>
  <script src="js/menu.js"></script>
  <script src="js/numbers.js"></script>
  </body>
</html>
