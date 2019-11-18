<?php
$title = "Home";
include("../includes/header.php");   
?>

<div id="home-wrapper">
    
    <section class="hero">
        <h2>What does good design mean to you?</h2>
        <h1>Dinnae Ken</h1>

    </section>

    
    <section class="services">
        <ul class="services-list">
            <li class="services-item design">
                <i class="fas fa-laptop"></i>
                <h3>Web Design</h3>
            </li>
            <li class="services-item">
                <i class="fas fa-gamepad"></i>
                <h3>Game Development</h3>
            </li>
            <li class="services-item">
                <i class="fas fa-cube"></i>
                <h3>3D Animation</h3>
            </li>
        </ul>
        <!-- <div class="services-item design">
            <i class="fas fa-laptop"></i>
            <h3>Web Design</h3>
        </div>
        <div class="services-item">
            <i class="fas fa-gamepad"></i>
            <h3>Game Development</h3>
        </div>
        <div class="services-item">
            <i class="fas fa-cube"></i>
            <h3>3D Animation</h3>
        </div> -->
    </section>

    <section class="gallery">
        <div class="gallery-item medium">one</div>
        <div class="gallery-item large two">two</div>
        <div class="gallery-item medium">three</div>
        <div class="gallery-item small">four</div>
        <div class="gallery-item tall">five</div>
        <div class="gallery-item wide">six</div>
    </section>

</div>

<?php
include("../includes/footer.php");   
?>