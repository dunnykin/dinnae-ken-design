<?php
$dkName = "Dinnae Ken Design";
$title = "Portfolio";
$description = "Dinnae Ken Design is an interactive media portfolio for design, 3D and game development based in Moray, Scotland.";
$keywords = "interactive media, 3d animation, design, game development, Elgin, Moray, Scotland, Dinnae Ken Design, Dinnae Ken Games";
$url = "https://www.dinnaeken.co.uk";
$image = "https://www.dinnaeken.co.uk/assets/images/dinnaekengames-header.png";
$imageAlt = "Dinnae Ken Design - Design, 3D & Game Development";
include("../includes/header.php");   
?>

<div id="home-wrapper">
    
    <!-- <section class="hero">
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
    </section> -->

    <section class="gallery">
        <div class="gallery-item wide">
            <div class="gallery-item-info">
                <h2>The Owl</h2>
                <h3>3D Animation</h3>
            </div>
            <img src="../assets/images/the-owl-003.jpeg" alt="A horned owl takes flight from a barn roof as an explosion sends the roof planks flying."/>
        </div>
        <div class="gallery-item tall">
            <div class="gallery-item-info">
                <h2>Dr Bones</h2>
                <h3>Game Development</h3>
            </div>
            <img src="../assets/images/drbones01.PNG" alt="An image of a man bisected. One half shows him in his underpants, the other half shows an x-ray view of him with his bones silhouetted."/>
        </div>
        <div class="gallery-item medium">
            <div class="gallery-item-info">
                <h2>Untitled Retail Sim</h2>
                <h3>Game Development</h3>
            </div>
            <img src="../assets/images/retailsim02.PNG" alt="A colourful stockroom with lots of items on the shelves and conveyor belt.">
        </div>
        <div class="gallery-item small">
            <div class="gallery-item-info">
                <h2>Social Menace</h2>
                <h3>Game Development</h3>
            </div>
            <img src="../assets/images/socialmenace02.PNG" alt="A cartoon village with townsfolk and a cyclops-like monster."/>
        </div>
        <div class="gallery-item large">
            <div class="gallery-item-info">
                <h2>AGBC Conference Room</h2>
                <h3>3D Model</h3>
            </div>
            <img src="../assets/images/finalrender01.jpg" alt="A realistic 3D render of a room setup for a round table dinner party."/>
        </div>
        <div class="gallery-item medium">
            <div class="gallery-item-info">
                <h2>The Visitor</h2>
                <h3>3D Animation</h3>
            </div>
            <img src="../assets/images/frame0000379.jpg" alt="A police car drives through a town."/>
        </div> 
    </section>

</div>

<?php
include("../includes/footer.php");   
?>