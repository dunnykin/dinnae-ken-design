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
        <picture>
            <source srcset="../assets/images/retailsim-01.webp" type="image/webp">
            <source srcset="../assets/images/retailsim-01.PNG" type="image/png"> 
            <img src="../assets/images/retailsim-01.PNG" alt="A screenshot shows a 3D stockroom with lots of colourful items filling the many shelves."/>
        </picture>
    </div>

    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/retailsim02.webp" type="image/webp">
            <source srcset="../assets/images/retailsim02.PNG" type="image/png"> 
            <img src="../assets/images/retailsim02.PNG" alt="Colourful items sitting on a converyor belt."/>
        </picture>
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
        <h3>TOOLS:</h3>
        <ul class="showcase-tools">
            <li>Unity</li>
            <li>Hack'n'Plan</li>
            <li>ProBuilder3D</li>
        </ul>
    </div>
    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/retailsim03.webp" type="image/webp">
            <source srcset="../assets/images/retailsim03.PNG" type="image/png"> 
            <img src="../assets/images/retailsim03.PNG" alt="Colourful items sit on fully-stocked shelves."/>
        </picture>
    </div>

    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/retailsim04.webp" type="image/webp">
            <source srcset="../assets/images/retailsim04.PNG" type="image/png"> 
            <img src="../assets/images/retailsim04.PNG" alt="In progress screenshot showing the Unity game engine editor."/>
        </picture>
    </div>
    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/retailsim05.webp" type="image/webp">
            <source srcset="../assets/images/retailsim05.PNG" type="image/png"> 
            <img src="../assets/images/retailsim05.PNG" alt="A screenshot of a script used to program the game."/>
        </picture>
    </div>
     
</section>

<?php
include("../includes/footer.php");   
?>