<?php
$title = "3D Modelling & Animation";
$dkName = "Dinnae Ken Design";
$description = "Dinnae Ken Design creates 3D models and animations, including cartoons and realistic renders.";
$keywords = "3d animation, 3d models, game development, Elgin, Moray, Scotland, Dinnae Ken Design";
$url = "https://www.dinnaeken.co.uk/php/3d-animation.php";
$image = "https://www.dinnaeken.co.uk/assets/images/owl-dev02.jpg";
$imageAlt = "A cartoon-like render of a 3D animation, depicting a farmer sat on a box outside a barn, whilst an owl looks down on him from the rafters of the barn.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="animation-products">
    <div class="product-container first-product">
        <a href="/php/the-owl.php">
        <picture>
            <source srcset="../assets/images/the-owl-003.webp" type="image/webp">
            <source srcset="../assets/images/the-owl-003.jpeg" type="image/jpeg"> 
            <img src="../assets/images/the-owl-003.jpeg" alt="A cartoon horned owl takes flight from a barn roof as an explosion in the barn sends the roof planks into the air."/>
        </picture>
            <div class="product-overlay">
                <div class="product product-header">
                    <p>3D Animation</p>
                </div>
                <div class="product product-title">
                    <p>The Owl</p>
                    <hr>
                </div>
                <ul class="product product-list">
                    <li>Bone-rigged characters</li>
                    <li>Animation controllers</li>
                    <li>Particle emittors</li>
                    <li>Cartoon-style shader</li>
                </ul>
                <div class="product product-footer">
                    <span>3DS MAX</span>
                </div>
            </div>
        </a>
    </div>

    <div class="product-container">
        <a href="/php/the-visitor.php">
            <picture>
                <source srcset="../assets/images/frame0000058.webp" type="image/webp">
                <source srcset="../assets/images/frame0000058.jpg" type="image/jpeg"> 
                <img src="../assets/images/frame0000058.jpg" alt="A might scene showing a police car parked on a street in a town."/>
            </picture>
            <div class="product-overlay">
                <div class="product product-header">
                    <p>3D Animation</p>
                </div>
                <div class="product product-title">
                    <p>The Visitor</p>
                    <hr>
                </div>
                <ul class="product product-list">
                    <li>Low-poly models</li>
                    <li>Realistic materials</li>
                    <li>Varied lighting techniques</li>
                </ul>
                <div class="product product-footer">
                    <span>3DS MAX</span>
                </div>
            </div>
        </a>
    </div>

    <div class="product-container">
        <a href="/php/conference-room.php">
            <picture>
                    <source srcset="../assets/images/finalrender02.webp" type="image/webp">
                    <source srcset="../assets/images/finalrender02.jpg" type="image/jpeg"> 
                    <img src="../assets/images/finalrender02.jpg" alt="A realistic 3D render showing a round table dinner party."/>
            </picture>
            <div class="product-overlay">
                <div class="product product-header">
                    <p>3D Render</p>
                </div>
                <div class="product product-title">
                    <p>Conference room</p>
                    <hr>
                </div>
                <ul class="product product-list">
                    <li>Accurate measurements</li>
                    <li>Realistic materials and lighting</li>
                    <li>Cloud rendered</li>
                    <li>Teamwork</li>
                </ul>
                <div class="product product-footer">
                    <span>3DS MAX</span>
                </div>
            </div>
        </a>
    </div>

</section>
<?php
include("../includes/footer.php");   
?>