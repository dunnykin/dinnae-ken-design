<?php
$title = "Social Menace";
$dkName = "Dinnae Ken Games";
$description = "Dinnae Ken Games is currently developing a 2D serious game named Social Menace, aimed at highlighting the issue of online toxicity and addressing the player's own behaviour online and when using social media.";
$keywords = "Unity, online toxicity, serious game, game development, Elgin, Moray, Scotland, Dinnae Ken Games";
$url = "https://www.dinnaeken.co.uk/php/social-menace.php";
$image = "https://www.dinnaeken.co.uk/assets/images/socialmenace03.PNG";
$imageAlt = "A screenshot showing a simple 2D cartoony village with little townsfolk, a strong female character and a cyclops monster.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <picture>
            <source srcset="../assets/images/socialmenace03.webp" type="image/webp">
            <source srcset="../assets/images/socialmenace03.PNG" type="image/png"> 
            <img src="../assets/images/socialmenace03.webp" alt="A screenshot showing a simple 2D cartoony village with little townsfolk, a strong female character and a cyclops monster."/>
        </picture>
    </div>

    <div class="showcase-img socialmenace-img">
        <picture>
            <source srcset="../assets/images/socialmenace-onesheet-01.webp" type="image/webp">
            <source srcset="../assets/images/socialmenace-onesheet-01.png" type="image/png"> 
            <img src="../assets/images/socialmenace-onesheet-01.png" alt="A one-sheet game development document."/>
        </picture>
    </div>
    <div class="showcase-text socialmenace-text">
        <h2>In Development</h2>
        <hr>
        <p>This game is being developed as a serious game for part of a class for Games Engines for Interactive Applications. This game is about online toxicity and is intended to get the player thinking about their own behaviour online and when using social media</p>
        <br>
        <ul class="showcase-list">
            <li>Made in Unity</li>
            <li>2D sprites</li>
            <li>Serious message</li>
        </ul>
        <hr>
        <ul class="showcase-tools">
            <h3>TOOLS:</h3>
            <li>Unity</li>
        </ul>
    </div>
     
</section>

<?php
include("../includes/footer.php");   
?>