<?php
$title = "Untitled Retail Sim";
$dkName = "Dinnae Ken Games";
$description = "Dinnae Ken Games is currently developing a first-person retail simulator in Unity.";
$keywords = "Unity 3d, first-person, retail sim, game development, Elgin, Moray, Scotland, Dinnae Ken Games";
$url = "https://www.dinnaeken.co.uk/php/retail-sim.php";
$image = "https://www.dinnaeken.co.uk/assets/images/retailsim-01.webp";
$imageAlt = "A screenshot shows a 3D stockroom with lots of colourful items filling the many shelves.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <img src="../assets/images/retailsim-01.webp" alt="A screenshot shows a 3D stockroom with lots of colourful items filling the many shelves."/>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/retailsim02.webp" alt="Colourful items sitting on a converyor belt."/>
    </div>
    <div class="showcase-text">
        <h2>In Development</h2>
        <hr>
        <p>This game began as the subject for my Dissertation: Research & Product Development. This is a game that sees the player in the role of a retail employee who has to serve customers by finding the right item in the stockroom and bringing it to them quickly and efficiently.</p>
        <br>
        <ul class="showcase-list">
            <li>Made in Unity</li>
            <li>First-person controller</li>
            <li>Procedural generation</li>
            <li>CPU controlled NPCs</li>
        </ul>
        <hr>
        <ul class="showcase-tools">
            <h3>TOOLS:</h3>
            <li>Unity</li>
            <li>Hack'n'Plan</li>
            <li>ProBuilder3D</li>
        </ul>
    </div>
    <div class="showcase-img">
        <img src="../assets/images/retailsim03.webp" alt="Colourful items sit on fully-stocked shelves."/>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/retailsim04.webp" alt="In progress screenshot showing the Unity game engine editor."/>
    </div>
    <div class="showcase-img">
        <img src="../assets/images/retailsim05.webp" alt="A screenshot of a script used to program the game."/>
    </div>
     
</section>

<?php
include("../includes/footer.php");   
?>