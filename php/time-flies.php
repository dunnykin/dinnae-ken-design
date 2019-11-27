<?php
$title = "Time Flies";
$dkName = "Dinnae Ken Games";
$description = "Dinnae Ken Games developed Time Flies in Adobe Animate during a 48 hour game jam named Moray Game Jam. The game is a point'n'click based on a world where time has gone missing.";
$keywords = "Adobe Animate, flash game, point'n'click, game jam, Moray Game Jam, game development, Elgin, Moray, Scotland, Dinnae Ken Games";
$url = "https://www.dinnaeken.co.uk/php/time-flies.php";
$image = "https://www.dinnaeken.co.uk/assets/images/timeflies.png";
$imageAlt = "A screenshot showing a tableaux of a frozen cartoon-like scene with various human characters stopped mid-action.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <img src="../assets/images/timeflies-gameplay.gif" alt="A gif showing gameplay, the mouse cursor is clicking on randomly appearing flying clocks."/>
    </div>

    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/timeflies-cover.webp" type="image/webp">
            <source srcset="../assets/images/timeflies-cover.png" type="image/png">
            <img src="../assets/images/timeflies-cover.png" alt="An alarm clock with wings."/>
        </picture>
    </div>
    <div class="showcase-text">
        <h2>Game Jam</h2>
        <hr>
        <p>TIME FLIES was created in a 48 hour game jam. It is a point and click game aimed at a young audience.</p>
        <br>
        <ul class="showcase-list">
            <li>2D UI-based gameplay</li>
            <li>Point 'n' click</li>
            <li>2D sprites</li>
            <li>Spritesheet animation</li>
        </ul>
        <hr>
        <ul class="showcase-tools">
            <h3>TOOLS:</h3>
            <li>Adobe Animate</li>
            <li>Adobe Illustrator</li>
            <li>Actionscript 3</li>
        </ul>
    </div>
    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/timeflies-gameplay.webp" type="image/webp">
            <source srcset="../assets/images/timeflies-gameplay.PNG" type="image/png">
            <img src="../assets/images/timeflies-gameplay.PNG" alt="Colourful characters frozen mid-action."/>
        </picture>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/timeflies-tutorial.gif" alt="A gif of the tutorial screen showing instructions for how to play the game."/>
    </div>
    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/timeflies-cover.webp" type="image/webp">
            <source srcset="../assets/images/timeflies-cover.png" type="image/png">
            <img src="../assets/images/timeflies.png" alt="Colourful characters frozen mid-action."/>
        </picture>
    </div>
     
    <div class="showcase-youtube">
        <iframe class="youtube-desktop" src="https://itch.io/embed/236985" height="167" width="552" frameborder="0"></iframe>
        <iframe class="youtube-mobile" src="https://itch.io/embed/236985" height="44" width="320" frameborder="0"></iframe>
    </div>
</section>

<?php
include("../includes/footer.php");   
?>