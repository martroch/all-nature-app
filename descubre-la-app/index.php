<?php $title="Discober de app";?>
<?php $path="../";?>
<?php $active="descure-la-app";?>
<?php include($path . 'php/head.php')?>
<body>
    <?php include($path . 'php/nav.php')?>
    <section>
        <img src="<?php echo $path; ?>resources/natural-meditation.jpg" alt="" class="intro-img">
        <h1 class="text-intro">Los entornos naturales Aumentan nuestra productividad, mejoran nuestro sueño y nos ayudan a relajarnos</h1>
    </section>
    <section class="text-sounds">
        <h2>SONIDOS DE LA NATURALEZA</h2>
        <p>Cuando salimos de la ciudad el fin de semana para ir a una zona rural o a la montaña o cuando damos un paseo por la playa, conseguimos alcanzar una sensación de calma que difícilmente logramos en nuestro día a día. <br>
        Escuchar los sonidos de la naturaleza o sumergirse en entornos naturales produce una reducción de los niveles de estrés, favoreciendo una actitud más positiva.
        </p>
    </section>
    <div class="btn-sound btn-sound-1">   
        <p class="btn-sound-text"> Sonido off</p>
        <svg width="38" height="7" viewBox="0 0 38 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 6.59V0" stroke="#FEFAF3"/>
            <path d="M37 6.59V0" stroke="#FEFAF3"/>
            <path d="M7 6.60735L7 0.0180664" stroke="#FEFAF3"/>
            <path d="M31 6.59L31 0" stroke="#FEFAF3"/>
            <path d="M13 6.59L13 0" stroke="#FEFAF3"/>
            <path d="M25 6.59L25 0" stroke="#FEFAF3"/>
            <path d="M19 6.59V0" stroke="#FEFAF3"/>
    </svg>
    </div>
    <video src="<?php echo $path; ?>resources/sound-river-video.mp4" loop controls id="river-video" class="river-video" poster="<?php echo $path; ?>resources/sounds-img.jpg"></video>
    
    <section class="text-meditation">
        <h2>MEDITACIÓN GUIADA</h2>
        <p>La meditación guiada es una herramienta que permite, mediante palabras e imágenes, dejar de lado emociones negativas como el dolor, el estrés y las preocupaciones del día a día, ayudándonos a conectar con nuestro interior. Ayuda a manejar el estrés y disminuir los problemas. <br>
        En ALLNatur app contamos con un equipo de guías de meditación especializada que junto a los videos de naturaleza inmersivos te permite desconectarr</p>
    </section>
    <div class="btn-sound btn-sound-2">   
        <p class="btn-sound-text"> Sonido off</p>
        <svg width="38" height="7" viewBox="0 0 38 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 6.59V0" stroke="#FEFAF3"/>
            <path d="M37 6.59V0" stroke="#FEFAF3"/>
            <path d="M7 6.60735L7 0.0180664" stroke="#FEFAF3"/>
            <path d="M31 6.59L31 0" stroke="#FEFAF3"/>
            <path d="M13 6.59L13 0" stroke="#FEFAF3"/>
            <path d="M25 6.59L25 0" stroke="#FEFAF3"/>
            <path d="M19 6.59V0" stroke="#FEFAF3"/>
    </svg>
    </div>
    <video src="<?php echo $path; ?>resources/sound-meditation.mp4" loop controls id="meditacion-video" class="meditacion-video" poster="<?php echo $path; ?>resources/meditacion-img.jpg"></video>
    <section class="last-secction-discober">
        <h2>DESCARGA LA APP ALL NATURE</h2>
        <div class="btns-dowload">
            <button class="btn-dowload">
                <img src="<?php echo $path; ?>resources/apple.svg" alt="">
                    Dowload on the<br> APP STORE</button>
            <button class="btn-dowload">
                    <img src="<?php echo $path; ?>resources/play-store.svg" alt="">
                    Dowload on the<br> PLAY STORE</button>
        </div>
    </section>
<?php include($path . 'php/footer.php')?>
<script src="<?php echo $path; ?>js/video.js"></script>
</body>
</html>