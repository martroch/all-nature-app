<?php $title="Area de usuario";?>
<?php $path="../";?>
<?php $active=true;?>
<?php include($path . 'php/head.php')?>
<body>
    <?php include($path . 'php/nav.php')?>

    <section class="user-area">
        <div class="img-username">
            <img class="imguser" src="data:image/jpeg;base64,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">
        </div>
        <div class="content-user">
            <h1 class="">Area de usuario</h1>
            <div class="group-user-content">
            <h3 class="color-white">Nombre de usuario</h3>
            <p class="username">@username</p>
        </div>   
        <div class="group-user-content">
            <h3 class="color-white">Nombre</h3>
            <p class="name">Name</p>
        </div>    
        <div class="group-user-content">
            <h3 class="color-white">Email</h3>
            <p class="email">email@gmail.com</p>
        </div>  
        <div class="group-user-content">
            <h3 class="color-white">Contraseña</h3>
            <p>********
                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.91634 7.6854L4.78301 5.83331L29.1663 30.2166L27.3143 32.0833L22.8226 27.5916C21.1455 28.1458 19.3663 28.4375 17.4997 28.4375C10.208 28.4375 3.98092 23.9021 1.45801 17.5C2.46426 14.9333 4.06842 12.6729 6.11009 10.8791L2.91634 7.6854ZM17.4997 13.125C18.66 13.125 19.7728 13.5859 20.5933 14.4064C21.4137 15.2269 21.8747 16.3397 21.8747 17.5C21.8747 18.0104 21.7872 18.5062 21.6268 18.9583L16.0413 13.3729C16.4934 13.2125 16.9893 13.125 17.4997 13.125ZM17.4997 6.56248C24.7913 6.56248 31.0184 11.0979 33.5413 17.5C32.3455 20.5333 30.3184 23.1583 27.708 25.0687L25.6372 22.9833C27.6205 21.6125 29.2538 19.7458 30.3622 17.5C27.9559 12.6 22.983 9.47915 17.4997 9.47915C15.9101 9.47915 14.3497 9.74165 12.8913 10.2083L10.6455 7.97706C12.7455 7.0729 15.0643 6.56248 17.4997 6.56248ZM4.63717 17.5C7.04343 22.4 12.0163 25.5208 17.4997 25.5208C18.5059 25.5208 19.4976 25.4187 20.4163 25.2146L17.0913 21.875C15.0059 21.6562 13.3434 19.9937 13.1247 17.9083L8.16634 12.9354C6.72259 14.175 5.51217 15.7208 4.63717 17.5Z" fill="#FEFAF3"/>
                </svg>
            </p>
        </div>  
</section>
    
    
    <section class="fav-places">
        <div class="group-user-content">
            <svg width="68" height="68" viewBox="0 0 68 68" fill="none" class="heart">
                <path d="M29.8827 55.725L29.882 55.7244C22.6608 49.1762 16.7069 43.7707 12.5525 38.688C8.4035 33.6121 6.10156 28.9192 6.10156 23.8046C6.10156 15.4276 12.6544 8.90161 21.0045 8.90161C25.7263 8.90161 30.2664 11.1023 33.2275 14.5524L33.6069 14.9944L33.9864 14.5524C36.9475 11.1023 41.4876 8.90161 46.2094 8.90161C54.5595 8.90161 61.1123 15.4276 61.1123 23.8046C61.1123 28.9192 58.8104 33.6121 54.6614 38.688C50.507 43.7707 44.5531 49.1762 37.3318 55.7244L37.3311 55.725L33.6069 59.1153L29.8827 55.725Z" stroke="#FEFAF3"/>
            </svg>
            <h2>Tus ubicaciones favoritas</h2>
        </div>
        <p class="sentence">sentence</p>
    <?php include($path . 'php/slider-user.php')?>
    </section>


    <section class="text-meditation">
        <div class="text-share">
            <h2>¿TIENES UN ESPACIO NUEVO?</h2>
            <h3>¡COMPARTE TUS ESPACIOS!</h3>
            <p>Te recomendamos grabar por separado el video y el audio de tus lugares favoritos para conseguir una mayor calidad y así poder disfrutar de tus espacios de una forma más profesional.</p>
            <button class="btn-organic">
                <svg viewBox="0 0 157 70" class="svg-1">
                    <path d="M59.1325 2.07707L59.1329 2.07715C65.8621 3.25698 72.67 4.37093 79.3962 5.47151C96.1038 8.20528 112.307 10.8565 125.545 14.23C134.829 16.5956 142.603 19.3049 148.046 22.6197C153.493 25.9363 156.5 29.7887 156.5 34.424C156.5 43.9587 147.981 52.7296 133.812 59.1454C119.688 65.5408 100.137 69.5 78.5 69.5C56.8633 69.5 37.3118 65.5408 23.1882 59.1454C9.01947 52.7296 0.5 43.9587 0.5 34.424C0.5 24.713 4.56945 14.7838 13.8882 8.20175C23.2125 1.61581 37.868 -1.67132 59.1325 2.07707Z"/>
                </svg>
            <p class="text-btn">Abrir la app </p>
            </button>
        </div>
    </section>
    <?php include($path . 'php/slider.php')?>
    <?php include($path . 'php/footer.php')?>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="<?php echo $path; ?>js/user.js"></script>
    
</body>

</html>