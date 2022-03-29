
<?php 
    switch ($active) {
        case "home":
            $indexActive === "menu__link--active";
            break;
        case "locations":
            echo "menu__link--active";
            break;
        case "descure-la-app":
            echo "menu__link--active";
            break;
        case "area-de-usuario":
                echo "menu__link--active";
                break;
    }
    ?>

<nav class="top top__nav">
    <a href="<?php echo $path; ?>" class="top top__logo"> 
        <img src="<?php echo $path; ?>resources/logo-all-nature.svg" alt="All Nature logo" width="200px">
    </a>
    <span class="nav-bar" id="btnMenu"><img src="<?php echo $path; ?>resources/icon-menu.svg" alt=""></span>
    <ul class="menu" id="menu">
        <li class="menu__item"><a href="<?php echo $path; ?>" class="menu__link <?php echo $indexActive;?>">Home</a></li>
        <li class="menu__item"><a href="<?php echo $path; ?>descubre-la-app" class="menu__link <?php echo $active;?>">Descubre la app</a></li>
        <li class="menu__item"><a href="<?php echo $path; ?>locations" class="menu__link <?php echo $active;?>">Ubicaciones</a></li>
        <li class="menu__item"><a href="<?php echo $path; ?>area-de-usuario" class="menu__link <?php echo $active;?>">Área de usuario</a></li>
    </ul>
</nav>
