<?php
$title = "Dr Bones";
$dkName = "Dinnae Ken Games";
$description = "Dinnae Ken Games developed an educational app named Dr Bones, aimed at teaching kids the names of bones in the body.";
$keywords = "interactive media, game development, Adobe Animate, flash game, vector, human bones, Elgin, Moray, Scotland,  Dinnae Ken Games";
$url = "https://www.dinnaeken.co.uk/php/dr-bones.php";
$image = "https://www.dinnaeken.co.uk/assets/images/drbones.webp";
$imageAlt = "A screenshot showing a cartoon doctor character and an x-rayed image o a man showing major bones in the body.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <img src="../assets/images/drbones.webp" alt="A screenshot showing a cartoon doctor character and an x-rayed image o a man showing major bones in the body."/>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/drbones01.webp" alt="An image of a man bisected. One half shows him in his underpants, the other half shows an x-ray view of him with his bones silhouetted."/>
    </div>
    <div class="showcase-text">
        <h2>Educational App</h2>
        <hr>
        <p>DR BONES is a small educational game aimed at helping young children learn the names of major bones in the body. The game was made in Adobe Animate and programmed in Actionscript 3.</p>
        <br>
        <ul class="showcase-list">
            <li>Adobe Animate</li>
            <li>Hangman style</li>
            <li>2D sprites</li>
            <li>Young audience</li>
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
        <img src="../assets/images/drbones02.webp"  alt="An image of an arm bone with a bunch of randomised letter tiles below it."/>
    </div>

    <div class="showcase-img">
        <img src="../assets/images/drbones03.webp"  alt="An image of the kneecap with a bunch of randomised letter tiles below. Some of the tiles are greyed out and the name of the bone is half-shown below it."/>
    </div>
    <div class="showcase-img">
        <img src="../assets/images/drbones04.webp"  alt="A list of achievement tiles showing names such as first try."/>
    </div>
     
    <div class="showcase-youtube">
        <iframe class="youtube-desktop" src="https://itch.io/embed/266773" height="167" width="552" frameborder="0"></iframe>
        <iframe class="youtube-mobile" src="https://itch.io/embed/266773" height="44" width="320" frameborder="0"></iframe>

    </div>
</section>

<?php
include("../includes/footer.php");   
?>