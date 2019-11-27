<?php
$title = "Game Development";
$dkName = "Dinnae Ken Games";
$description = "Dinnae Ken Games develops games in Unity, including typing games, point'n'click games. Currently in development is a 3D first-person retail simulator, as yet untitled.";
$keywords = "Unity3d, game development, retail sim, game jam, Elgin, Moray, Scotland, Dinnae Ken Games";
$url = "https://www.dinnaeken.co.uk/php/game-dev.php";
$image = "https://www.dinnaeken.co.uk/assets/images/retailsim-01.webp";
$imageAlt = "A screenshot shows a 3D stockroom with lots of colourful items filling the many shelves.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="gamedev-products">
    <div class="product-container first-product">
        <a href="/php/retail-sim.php">
            <picture>
                <source srcset="../assets/images/retailsim02.webp" type="image/webp">
                <source srcset="../assets/images/retailsim02.PNG" type="image/png"> 
                <img src="../assets/images/retailsim02.PNG" alt="A screenshot shows a 3D stockroom with lots of colourful items filling the many shelves."/>
            </picture>
            <div class="product-overlay">
                <div class="product product-header">
                    <p>PC Game</p>
                </div>
                <div class="product product-title">
                    <p>Untitled Retail Sim</p>
                    <hr>
                </div>
                <div class="product product-list">
                    <li>First-person controller</li>
                    <li>Procedurally generated stock</li>
                    <li>CPU controlled NPCs</li>
                </div>
                <div class="product product-footer">
                    <span>Unity</span>
                </div>
            </div>
        </a>
    </div>

    <div class="product-container">
        <a href="/php/social-menace.php">
            <picture>
                <source srcset="../assets/images/socialmenace03.webp" type="image/webp">
                <source srcset="../assets/images/socialmenace03.PNG" type="image/png"> 
                <img src="../assets/images/socialmenace03.PNG" alt="A cartoon village with a cyclops monster in the middle."/>
            </picture>
            <div class="product-overlay">
                <div class="product product-header">
                    <p>Serious PC Game</p>
                </div>
                <div class="product product-title">
                    <p>Social Menace</p>
                    <hr>
                </div>
                <div class="product product-list">
                    <li>2D Sprites</li>
                    <li>UI based gameplay</li>
                    <li>Serious theme</li>
                </div>
                <div class="product product-footer">
                    <span>Unity</span>
                </div>
            </div>
        </a>
    </div>

    <div class="product-container">
        <a href="/php/time-flies.php">
            <picture>
                <source srcset="../assets/images/timeflies.webp" type="image/webp">
                <source srcset="../assets/images/timeflies.png" type="image/png"> 
                <img src="../assets/images/timeflies.png" alt="A cartoon-like scene showing characters frozen in time mid-action."/>
            </picture>
            <div class="product-overlay">
                <div class="product product-header">
                    <p>Game Jam</p>
                </div>
                <div class="product product-title">
                    <p>Time Flies</p>
                    <hr>
                </div>
                <div class="product product-list">
                    <li>Point and click gameplay</li>
                    <li>2D sprites</li>
                    <li>Young audience</li>
                    <li>Made in 48 hours</li>
                </div>
                <div class="product product-footer">
                    <span>Adobe Animate</span>
                </div>
            </div>
        </a>
    </div>

    <div class="product-container">
        <a href="/php/dr-bones.php">
            <picture>
                <source srcset="../assets/images/drbones01.webp" type="image/webp">
                <source srcset="../assets/images/drbones01.PNG" type="image/png"> 
                <img src="../assets/images/drbones01.PNG" alt="An image of a man bisected. One half shows him in his underpants, the other half shows an x-ray view of him with his bones silhouetted."alt="An image of a man bisected. One half shows him in his underpants, the other half shows an x-ray view of him with his bones silhouetted."/>
            </picture>
            <div class="product-overlay">
                <div class="product product-header">
                    <p>Educational App</p>
                </div>
                <div class="product product-title">
                    <p>Dr Bones</p>
                    <hr>
                </div>
                <div class="product product-list">
                    <li>Hangman gameplay</li>
                    <li>2D sprites</li>
                    <li>Young audience</li>
                    <li>Teaching bone names</li>
                </div>
                <div class="product product-footer">
                    <span>Adobe Animate</span>
                </div>
            </div>
        </a>
    </div>

    <div class="product-container">
        <a href="/php/watch-this-space.php">
            <picture>
                <source srcset="../assets/images/watchthisspace-01.webp" type="image/webp">
                <source srcset="../assets/images/watchthisspace-01.PNG" type="image/png"> 
                <img src="../assets/images/watchthisspace-01.PNG" alt="A stickman character sat on an armchair between two televisions."/>
            </picture>
            <div class="product-overlay">
                <div class="product product-header">
                    <p>Game Jam</p>
                </div>
                <div class="product product-title">
                    <p>Watch This Space</p>
                    <hr>
                </div>
                <div class="product product-list">
                    <li>Typing gameplay</li>
                    <li>2D sprites</li>
                    <li>Made in 48 hours</li>
                </div>
                <div class="product product-footer">
                    <span>Unity</span>
                </div>
            </div>
        </a>
    </div>

</section>
<?php
include("../includes/footer.php");   
?>