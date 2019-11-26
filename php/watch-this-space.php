<?php
$title = "Watch This Space";
$dkName = "Dinnae Ken Games";
$description = "Dinnae Ken Games developed Watch This Space in Unity during a 48 hour game jam, Moray Game Jam. The game is a typing game based on not beliving everything you see on the news and tv.";
$keywords = "Unity 3d, first-person, retail sim, game development, Elgin, Moray, Scotland, Dinnae Ken Games";
$url = "https://www.dinnaeken.co.uk/php/watch-this-space.php";
$image = "https://www.dinnaeken.co.uk/assets/images/watchthisspace-02.webp";
$imageAlt = "A screenshot showing a stickman character sat on a seat between two televisions as various words drop down the screen.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <img src="../assets/images/watchthisspace.webp" alt="A smiling stickman sits between two televisions as various words drop down the screen."/>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/watchthisspace-01.webp" alt="Tutorial instructions below the character sat between the televisions."/>
    </div>
    <div class="showcase-text">
        <h2>Game Jam</h2>
        <hr>
        <p>WATCH THIS SPACE was created in 48 hours using Unity. The theme of the jam was “Seeing is Believing” and this game focuses on fake news and the media. Whilst participating in the jam, I also documented the process on camera and made a short film about the experience.</p>
        <br>
        <ul class="showcase-list">
            <li>Typing-based gameplay</li>
            <li>Vector assets</li>
            <li>2D sprite animation</li>
            <li>In-game tutorial</li>
        </ul>
        <hr>
        <ul class="showcase-tools">
            <h3>TOOLS:</h3>
            <li>Unity</li>
            <li>Adobe Illustrator</li>
            <li>C#</li>
        </ul>
    </div>
    <div class="showcase-img">
        <img src="../assets/images/watchthisspace-tv.webp" alt="A stylised cartoon television with old style wonky antenna."/>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/watchthisspace-sprite-sheet.webp" alt="A spritesheet showing the stickman character broken up into composite parts."/>
    </div>
    <div class="showcase-img">
        <img src="../assets/images/watchthisspace-02.webp" alt="An unhappy stickman character cowering in his seat between two televisions."/>
    </div>
     
    <div class="showcase-youtube">
        <iframe class="youtube-desktop" src="https://itch.io/embed/397171" height="167" width="552" frameborder="0"></iframe>
        <iframe class="youtube-mobile" src="https://itch.io/embed/397171" height="44" width="320" frameborder="0"></iframe>
    </div>
</section>

<?php
include("../includes/footer.php");   
?>