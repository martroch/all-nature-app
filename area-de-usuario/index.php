<?php $title="Area de usuario";?>
<?php $path="../";?>
<?php $active=true;?>
<?php include($path . 'php/head.php')?>
<body>
    <?php include($path . 'php/nav.php')?>

    <h1>Area de usuario</h1>
    <section id="user-area"></section>
    <section class="text-sounds share-all">
        <div class="text-share">
            <h2>¿TIENES UN ESPACIO NUEVO?</h2>
            <h3>¡COMPARTE TUS ESPACIOS!</h3>
            <div class="new-space">
                <p>Te recomendamos grabar por separado el video y el audio de tus lugares favoritos para conseguir una mayor calidad y así poder disfrutar de tus espacios de una forma más profesional.</p>
                <button class="btn-organic">
                    <svg viewBox="0 0 157 70" class="svg-1">
                        <path d="M59.1325 2.07707L59.1329 2.07715C65.8621 3.25698 72.67 4.37093 79.3962 5.47151C96.1038 8.20528 112.307 10.8565 125.545 14.23C134.829 16.5956 142.603 19.3049 148.046 22.6197C153.493 25.9363 156.5 29.7887 156.5 34.424C156.5 43.9587 147.981 52.7296 133.812 59.1454C119.688 65.5408 100.137 69.5 78.5 69.5C56.8633 69.5 37.3118 65.5408 23.1882 59.1454C9.01947 52.7296 0.5 43.9587 0.5 34.424C0.5 24.713 4.56945 14.7838 13.8882 8.20175C23.2125 1.61581 37.868 -1.67132 59.1325 2.07707Z"/>
                    </svg>
                <p class="text-btn">Abrir la app </p>
                </button>
            </div>
        </div>
    </section>


    <?php include($path . 'php/footer.php')?>
    <?php include($path . 'php/slider.php')?>
    <script src="<?php echo $path; ?>js/user.js"></script>
</body>

</html>