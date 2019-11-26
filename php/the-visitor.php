<?php
$title = "The Visitor";
$dkName = "Dinnae Ken Design";
$description = "Dinnae Ken Design created a 3D animation named The Visitor, using 3DS Max. The animation tells the story of an object crashing to the ground from space, and the police who investigate it.";
$keywords = "3d animation, the visitor, 3ds max, sci-fi, Elgin, Moray, Scotland, Dinnae Ken Design";
$url = "https://www.dinnaeken.co.uk/php/the-visitor.php";
$image = "https://www.dinnaeken.co.uk/assets/images/frame0000379.jpg";
$imageAlt = "A single rendered frame depicting a police car driving through a town, the lights reflecting on the surrounding windows.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <img src="../assets/images/frame0000058.jpg" alt="A police car parked in an empty street at night."/>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/frame0000379.jpg" alt="A police car with lights flashing, driving through an empty street at night."/>
    </div>
    <div class="showcase-text">
        <h2>3D Modelling & Animation</h2>
        <hr>
        <p>The brief for this project was to create an animation with a sci-fi theme. This was my first attempt at animating 3D models and was created using 3DS Max.</p>
        <br>
        <ul class="showcase-list">
            <li>Low-poly models</li>
            <li>Realistic materials</li>
            <li>24 fps animation</li>
            <li>Multiple lighting types -
                spotlights, emissive materials
            </li>
        </ul>
        <hr>
        <ul class="showcase-tools">
            <h3>TOOLS:</h3>
            <li>3DS Max</li>
            <li>Autodesk Mudbox</li>
            <li>Adobe Premiere Pro</li>
            <li>Adobe After Effects</li>
        </ul>
    </div>
    <div class="showcase-img">
        <img src="../assets/images/frame0000519.jpg" alt="A police car drives through the woods at night."/>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/frame0000714.jpg" alt="A shiny metal robot with glowing eyes wearing a police badge."/>
    </div>
    <div class="showcase-img">
        <img src="../assets/images/frame0000687.jpg" alt="An astronaut standing on the edge of a crater, waving."/>
    </div>


    <div class="showcase-youtube">
        <iframe class="youtube-desktop" width="560" height="315" src="https://www.youtube.com/embed/C0PZJT9Z7ro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe class="youtube-mobile" width="320" height="180" src="https://www.youtube.com/embed/C0PZJT9Z7ro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>        
</section>

<?php
include("../includes/footer.php");   
?>