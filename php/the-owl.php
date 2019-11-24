<?php
$title = "The Owl";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="showcase">
    <div class="showcase-hero">
        <img src="../assets/images/the-owl-001.jpeg" />
    </div>

    <div class="showcase-img">
        <img src="../assets/images/owl-dev04.png" />
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
        <img src="../assets/images/owl-dev01.png" />
    </div>

    <div class="showcase-img">
        <img src="../assets/images/owl-dev02.jpg" />
    </div>
    <div class="showcase-img">
        <img src="../assets/images/owl-dev03.png" />
    </div>


    <div class="showcase-youtube">
        <iframe class="youtube-desktop" width="560" height="315" src="https://www.youtube.com/embed/TxLkvYWsabM" 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>

        <iframe class="youtube-mobile" width="320" height="180" src="https://www.youtube.com/embed/TxLkvYWsabM" 
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>        
</section>

<?php
include("../includes/footer.php");   
?>