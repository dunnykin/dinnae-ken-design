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
        <div class="gallery-item medium">
            <div class="gallery-item-info">
                <h2>Untitled Retail Sim</h2>
                <h3>Game Development</h3>
            </div>
            <img src="../assets/images/retailsim02.PNG">
        </div>
        <div class="gallery-item large">
            <div class="gallery-item-info">
                <h2>AGBC Conference Room</h2>
                <h3>3D Model</h3>
            </div>
            <img src="../assets/images/finalrender01.jpg" />
        </div>
        <div class="gallery-item medium">
            <div class="gallery-item-info">
                <h2>The Visitor</h2>
                <h3>3D Animation</h3>
            </div>
            <img src="../assets/images/frame0000379.jpg" />
        </div>
        <div class="gallery-item small">
            <div class="gallery-item-info">
                <h2>Social Menace</h2>
                <h3>Game Development</h3>
            </div>
            <img src="../assets/images/socialmenace02.PNG" />
        </div>
        <div class="gallery-item tall">
            <div class="gallery-item-info">
                <h2>Dr Bones</h2>
                <h3>Game Development</h3>
            </div>
            <img src="../assets/images/drbones01.PNG" />
        </div>
        <div class="gallery-item wide">
            <div class="gallery-item-info">
                <h2>The Owl</h2>
                <h3>3D Animation</h3>
            </div>
            <img src="../assets/images/the-owl-003.jpeg" />
        </div>
    </section>

</div>

<?php
include("../includes/footer.php");   
?>