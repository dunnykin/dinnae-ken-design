<?php
$title = "Conference room";
$dkName = "Dinnae Ken Design";
$description = "Dinnae Ken Design created a realistic 3D render of the Alexander Graham Bell Centre conference room of Moray College UHI, located in Elgin, Moray, Scotland.";
$keywords = "3d animation, 3d model, realistic materials, Elgin, Moray, Scotland, Dinnae Ken Design";
$url = "https://www.dinnaeken.co.uk/php/conference-room.php";
$image = "https://www.dinnaeken.co.uk/assets/images/TeamOlympus-AGBC-1.jpg";
$imageAlt = "Realistically rendered 3D model of a conference room set out for a round table dinner party.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <picture>
            <source srcset="../assets/images/finalrender01.webp" type="image/webp">
            <source srcset="../assets/images/finalrender01.jpg" type="image/jpeg"> 
            <img src="../assets/images/finalrender01.jpg" alt="A realistic 3D render of a round table dinner party. A long shot showing the length of the room."/>
        </picture>
    </div>

    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/finalrender02.webp" type="image/webp">
            <source srcset="../assets/images/finalrender02.jpg" type="image/jpeg"> 
            <img src="../assets/images/finalrender02.jpg" alt="A close up shot of one of the tables, with a cream tablecloth and eight place settings."/>
        </picture>
    </div>
    <div class="showcase-text">
        <h2>3D Modelling</h2>
        <hr>
        <p>This team project required us to accurately model the Alexander Graham Bell conference room in Moray College UHI. As one of three, my task was to model the room itself, whilst my team mates created the furniture and decoration elements.</p>
        <br>
        <ul class="showcase-list">
            <li>Accurately measured models</li>
            <li>Realistic materials</li>
            <li>Realistic lighting</li>
            <li>Teamwork</li>
            <li>Asset management</li>
        </ul>
        <hr>
        <h3>TOOLS:</h3>
        <ul class="showcase-tools">            
            <li>3DS Max</li>
            <li>Cloud Renderer</li>
        </ul>
    </div>
    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/tablecloth-redvelvet.webp" type="image/webp">
            <source srcset="../assets/images/tablecloth-redvelvet.jpg" type="image/jpeg"> 
            <img src="../assets/images/tablecloth-redvelvet.jpg" alt="An alternate shot of the room, showing the tables with red velvet tablecloths."/>
        </picture>
    </div>

    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/finalrender04.webp" type="image/webp">
            <source srcset="../assets/images/finalrender04.jpg" type="image/jpeg"> 
            <img src="../assets/images/finalrender04.jpg" alt="A closer shot of the room showing only a few tables in front of a glass sliding door."/>
        </picture>
    </div>
    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/TeamOlympus-AGBC-1.webp" type="image/webp">
            <source srcset="../assets/images/TeamOlympus-AGBC-1.jpg" type="image/jpeg"> 
            <img src="../assets/images/TeamOlympus-AGBC-1.jpg" alt="A shot of the conference room with no furniture in it."/>
        </picture>
    </div>
     
</section>

<?php
include("../includes/footer.php");   
?>