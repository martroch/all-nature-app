<?php $title="log-in";?>
<?php $path="../";?>
<?php $active=true;?>
<?php include($path . 'php/head.php')?>
<body>
    <?php include($path . 'php/nav.php')?>

    <form name="contact" class="contact">
        <h1 class="login">Iniciar sesión</h1>
        <div class="fields">
                <label for="name" class="label">Nombre de usuario o email</label>
                <input class="input" id="name" placeholder="user@gmail.com" name="name" required>
                <label for="name" class="label">Contraseña</label>
                <input class="input" id="password" placeholder="********" type="password" required name="email">
        </div>
        <button class="btn-organic" id="add">
            <svg viewBox="0 0 157 70" class="svg-1">
                <path d="M59.1325 2.07707L59.1329 2.07715C65.8621 3.25698 72.67 4.37093 79.3962 5.47151C96.1038 8.20528 112.307 10.8565 125.545 14.23C134.829 16.5956 142.603 19.3049 148.046 22.6197C153.493 25.9363 156.5 29.7887 156.5 34.424C156.5 43.9587 147.981 52.7296 133.812 59.1454C119.688 65.5408 100.137 69.5 78.5 69.5C56.8633 69.5 37.3118 65.5408 23.1882 59.1454C9.01947 52.7296 0.5 43.9587 0.5 34.424C0.5 24.713 4.56945 14.7838 13.8882 8.20175C23.2125 1.61581 37.868 -1.67132 59.1325 2.07707Z"/>
            </svg>
            <p class="text-btn">Entrar</p>
        </button>
        <div class="singin">
            <h3>¿Aun no tienes una cuenta? Crea una cuenta en All Nature App</h3>
            <button class="btn-organic btn-organic__sigin">
            <svg viewBox="0 0 157 70" class="svg-1">
                <path d="M59.1325 2.07707L59.1329 2.07715C65.8621 3.25698 72.67 4.37093 79.3962 5.47151C96.1038 8.20528 112.307 10.8565 125.545 14.23C134.829 16.5956 142.603 19.3049 148.046 22.6197C153.493 25.9363 156.5 29.7887 156.5 34.424C156.5 43.9587 147.981 52.7296 133.812 59.1454C119.688 65.5408 100.137 69.5 78.5 69.5C56.8633 69.5 37.3118 65.5408 23.1882 59.1454C9.01947 52.7296 0.5 43.9587 0.5 34.424C0.5 24.713 4.56945 14.7838 13.8882 8.20175C23.2125 1.61581 37.868 -1.67132 59.1325 2.07707Z"/>
            </svg>
            <p class="text-btn text-btn__brown">Regístrate</p>
        </button>
        </div>
    </form>
        <div class="contact-list"></div>

    <?php include($path . 'php/footer.php')?>
    <script src="<?php echo $path; ?>js/login.js"></script>
</body>

</html>