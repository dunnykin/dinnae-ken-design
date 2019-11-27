<?php
$title = "The Owl";
$dkName = "Dinnae Ken Design";
$description = "Dinnae Ken Design created a 3D animation called The Owl based on a Brothers Grimm tale of the same name. The story is about a silly farmer getting scared by a gentle horned owl sleeping in his barn.";
$keywords = "3d animation, brothers grimm, the owl, cartoon shader, animation controllers, particle emittors, Elgin, Moray, Scotland, Dinnae Ken Design";
$url = "https://www.dinnaeken.co.uk/php/the-owl.php";
$image = "https://www.dinnaeken.co.uk/assets/images/the-owl-001.jpeg";
$imageAlt = "A cartoon-like render of frame from a 3D animation, depicting a sleeping horned owl in the rafters of a barn.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <picture>
            <source srcset="../assets/images/the-owl-001.webp" type="image/webp">
            <source srcset="../assets/images/the-owl-001.jpeg" type="image/jpeg"> 
            <img src="../assets/images/the-owl-001.jpeg" alt="A sleeping horned owl."/>
        </picture>
    </div>

    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/owl-dev04.webp" type="image/webp">
            <source srcset="../assets/images/owl-dev04.jpg" type="image/jpeg"> 
            <img src="../assets/images/owl-dev04.jpg" alt="A view of the owl model showing the edged faces."/>
        </picture>
    </div>
    <div class="showcase-text">
        <h2>3D Modelling & Animation</h2>
        <hr>
        <p>A two and a half minute animation based on a tale by the Brothers Grimm, incorporating advanced animation techniques.</p>
        <br>
        <ul class="showcase-list">
            <li>Bone rigged characters with animation controllers</li>
            <li>Fire, smoke, liquid and explosion particle effect emittors</li>
            <li>Cartoon-style shader</li>
            <li>9000 rendered frames</li>
            <li>60 fps animation</li>
        </ul>
        <hr>
        <ul class="showcase-tools">
            <h3>TOOLS:</h3>
            <li>3DS Max</li>
            <li>Mental Ray Renderer</li>
            <li>Adobe Premiere Pro</li>
            <li>Adobe After Effects</li>
        </ul>
    </div>
    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/owl-dev01.webp" type="image/webp">
            <source srcset="../assets/images/owl-dev01.png" type="image/png"> 
            <img src="../assets/images/owl-dev01.png" alt="A view of the farmer model showing the animation controllers."/>
        </picture>
    </div>

    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/owl-dev02.webp" type="image/webp">
            <source srcset="../assets/images/owl-dev02.jpg" type="image/jpeg"> 
            <img src="../assets/images/owl-dev02.jpg" alt="A shot of the owl sat in the barn window looking down on the farmer."/>
        </picture>
    </div>
    <div class="showcase-img">
        <picture>
            <source srcset="../assets/images/owl-dev03.webp" type="image/webp">
            <source srcset="../assets/images/owl-dev03.png" type="image/png"> 
            <img src="../assets/images/owl-dev03.png" alt="A wireframe view of the owl model."/>
        </picture>
    </div>


    <div class="showcase-youtube">
        <iframe title="Watch The Owl on Youtube" class="youtube-desktop" width="560" height="315" src="https://www.youtube.com/embed/TxLkvYWsabM" 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>

        <iframe title="Watch The Owl on Youtube" class="youtube-mobile" width="320" height="180" src="https://www.youtube.com/embed/TxLkvYWsabM" 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>        
</section>

<?php
include("../includes/footer.php");   
?>