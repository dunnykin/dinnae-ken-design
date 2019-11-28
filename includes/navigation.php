<header>
    <section class="nav-wrapper">
        <a class="nav-icon" href="/php/index.php">
            <?php if($dkName == "Dinnae Ken Design")
                echo file_get_contents("../assets/images/svg/dinnaeken-design-logo.svg");
            else
                echo file_get_contents("../assets/images/svg/dinnaeken-games-logo.svg");
            ?>
        </a>
        <a class="nav-logo" href="/php/index.php">
            <?php echo file_get_contents("../assets/images/svg/dinnaeken-design-txt.svg");
            // Show "design" or "games"
            if ($dkName == "Dinnae Ken Design")
                echo '<style>.logo-txt-games{display:none}</style>';
            else
                echo '<style>.logo-txt-design{display:none}</style>';
            ?>
        </a>
        <nav class="nav-bar">
            <ul class="nav-links">
                <li class="nav-link"><a href="/php/design.php">Design</a></li>
                <li class="nav-link"><a href="/php/game-dev.php">Game Development</a></li>
                <li class="nav-link"><a href="/php/3d-animation.php">3D Animation</a></li>
            </ul>
        </nav>
    </section>
    <section class="grid-container">
    </section>
</header>