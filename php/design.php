<?php
$title = "Design";
$dkName = "Dinnae Ken Design";
$description = "Dinnae Ken Design creates design work of many types, such as vector and bitmap art, video editing, animations, web and app design.";
$keywords = "interactive media, design, 2d animation, vector graphics, bitmap graphics, web design, video editing, Elgin, Moray, Scotland, Dinnae Ken Design";
$url = "https://www.dinnaeken.co.uk/php/design.php";
$image = "https://www.dinnaeken.co.uk/assets/images/nordic-spring-01.jpg";
$imageAlt = "A poster for a fictional water brand Nordic Spring, depicting runners in a track race, the leading runner is wearing a horned viking helmet and full braided beard, carrying a wooden shield and a bottle of water.";
include("../includes/header.php");   
?>
<h1 class="page-title"><?php echo $title; ?></h1>

<section class="design-products">

    <div class="design-info">
        <p>Each of these items are purely to demonstrate design ability.</p>
        <br>
        <p>Most are work created in college, and some are very early into my design education, so are pretty rough around the edges.</p>
        <br>
        <p>However, each one should demonstrate a design technique or two, click on them for a closer look:</p>
    </div>

    <div class="product-container design-darkness" onclick="openModal();currentSlide(1)">
        <img src="../assets/images/the-darkness.jpg" alt="An album cover depicting a giant pug towering over a ruined city, a la Godzilla."/>
        <div class="product-overlay">
            <div class="product product-header">
                <p>Bitmap art</p>
            </div>
            <div class="product product-title">
                <p>Album Cover</p>
                <hr>
            </div>
            <div class="product product-list">
                Mock up album cover for The Darkness - Permission To Land
            </div>
            <div class="product product-footer">
                <span>Adobe Photoshop</span>
            </div>
        </div>
    </div>

    <div class="product-container design-nordic-tall" onclick="openModal();currentSlide(3)">
        <img src="../assets/images/nordic-spring-02.jpg" alt="A poster for a water brand showing a bottle in the foreground with a viking longboat sailing on the sea in the background."/>
        <div class="product-overlay">
            <div class="product product-header">
                <p>Bitmap art</p>
            </div>
            <div class="product product-title">
                <p>Nordic Spring</p>
                <hr>
            </div>
            <div class="product product-list">
                Branding exercise for a fictional water company.
            </div>
            <div class="product product-footer">
                <span>Adobe Photoshop</span>
            </div>
        </div>
    </div>

    <div class="product-container design-swatch" onclick="openModal();currentSlide(2)">
        <img src="../assets/images/swatch-poster.png" alt="A poster for Swatch depicting a giant tentacled sea monster attacking a lighthouse. One of the tentacles is a giant wristwatch."/>
        <div class="product-overlay">
            <div class="product product-header">
                <p>Vector Art</p>
            </div>
            <div class="product product-title">
                <p>Poster mock-up</p>
                <hr>
            </div>
            <div class="product product-list">
                Mock campaign for Swatch - for educational purposes only
            </div>
            <div class="product product-footer">
                <span>Adobe Illustrator</span>
            </div>
        </div>
    </div>

    <div class="product-container design-nordic-wide" onclick="openModal();currentSlide(4)">
        <img src="../assets/images/nordic-spring-02.jpg" alt="A poster for a water brand showing a track running race where the lead runner is wearing a horned viking helmet, full braided beard and carrying a wooden shield."/>
        <div class="product-overlay">
            <div class="product product-header">
                <p>Bitmap art</p>
            </div>
            <div class="product product-title">
                <p>Nordic Spring</p>
                <hr>
            </div>
            <div class="product product-list">
                Branding exercise for a fictional water company.
            </div>
            <div class="product product-footer">
                <span>Adobe Photoshop</span>
            </div>
        </div>
    </div>

    <div class="product-container design-smoke" onclick="openModal();currentSlide(5)">
        <img src="../assets/images/anti-smoking-trump.jpg" alt="An anti-smoking poster showing a horribly ugly man pulling a ridiculous face. In his hand is a cigarette."/>
        <div class="product-overlay">
            <div class="product product-header">
                <p>Bitmap art</p>
            </div>
            <div class="product product-title">
                <p>Anti-Smoking Poster</p>
                <hr>
            </div>
            <div class="product product-list">
                ...do you really need to know more about this one?
            </div>
            <div class="product product-footer">
                <span>Adobe Photoshop</span>
            </div>
        </div>
    </div>

    <div class="product-container design-death" onclick="openModal();currentSlide(6)">
        <img src="../assets/images/Animation2.0.gif" alt="A short gif of an animation showing a dwarf character dancing with a skeletal character."/>
        <div class="product-overlay">
            <div class="product product-header">
                <p>2D Animation</p>
            </div>
            <div class="product product-title">
                <p>Death & The Dwarf</p>
                <hr>
            </div>
            <div class="product product-list">
                This was my first real attempt at 2D animation, using vector based characters.
            </div>
            <div class="product product-footer">
                <span>Adobe Animate</span>
            </div>
        </div>
    </div>

    <div class="product-container design-halifax" onclick="openModal();currentSlide(7)">
        <img src="../assets/images/halifax.png" alt="A cartoon bearded man holding a riot helmet and a saucepan in a wheat field with a smoking airdropped crate in the background."/>
        <div class="product-overlay">
            <div class="product product-header">
                <p>Bitmap & Vector art</p>
            </div>
            <div class="product product-title">
                <p>Halifax on Twitch</p>
                <hr>
            </div>
            <div class="product product-list">
                A series of images produced for Twitch streamer TSM_Halifax.
            </div>
            <div class="product product-footer">
                <span>Adobe Illustrator</span>
            </div>
        </div>
    </div>

</section>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="modal-slide">
      <div class="numbertext">1 / 7</div>
      <img src="../assets/images/the-darkness.jpg" alt="An album cover depicting a giant pug towering over a ruined city, a la Godzilla.">
    </div>

    <div class="modal-slide">
      <div class="numbertext">2 / 7</div>
      <img src="../assets/images/nordic-spring-02.jpg" alt="A poster for a water brand showing a bottle in the foreground with a viking longboat sailing on the sea in the background.">
    </div>

    <div class="modal-slide">
      <div class="numbertext">3 / 7</div>
      <img src="../assets/images/nordic-spring-02.jpg" alt="A poster for a water brand showing a track running race where the lead runner is wearing a horned viking helmet, full braided beard and carrying a wooden shield.">
    </div>
    
    <div class="modal-slide">
      <div class="numbertext">4 / 7</div>
      <img src="../assets/images/swatch-poster.png" alt="A poster for Swatch depicting a giant tentacled sea monster attacking a lighthouse. One of the tentacles is a giant wristwatch.">
    </div>

    <div class="modal-slide">
      <div class="numbertext">5 / 7</div>
      <img src="../assets/images/anti-smoking-trump.jpg" alt="An anti-smoking poster showing a horribly ugly man pulling a ridiculous face. In his hand is a cigarette.">
    </div>

    <div class="modal-slide">
      <div class="numbertext">6 / 7</div>
      <img src="../assets/images/Animation2.0.gif" alt="A short gif of an animation showing a dwarf character dancing with a skeletal character.">
    </div>

    <div class="modal-slide">
      <div class="numbertext">7 / 7</div>
      <img src="../assets/images/halifax.png" alt="A cartoon bearded man holding a riot helmet and a saucepan in a wheat field with a smoking airdropped crate in the background.">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="columns">
        <div class="column">
        <img class="slide cursor" src="../assets/images/the-darkness.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Darkness mock album art">
        </div>
        <div class="column">
        <img class="slide cursor" src="../assets/images/nordic-spring-02.jpg" style="width:100%" onclick="currentSlide(2)" alt="Fictional water brand, Nordic Spring">
        </div>
        <div class="column">
        <img class="slide cursor" src="../assets/images/nordic-spring-02.jpg" style="width:100%" onclick="currentSlide(3)" alt="Fictional water brand, Nordic Spring">
        </div>
        <div class="column">
        <img class="slide cursor" src="../assets/images/swatch-poster.png" style="width:100%" onclick="currentSlide(4)" alt="Swatch mock poster">
        </div>
        <div class="column">
        <img class="slide cursor" src="../assets/images/anti-smoking-trump.jpg" style="width:100%" onclick="currentSlide(5)" alt="Anti-smoking campaign poster">
        </div>
        <div class="column">
        <img class="slide cursor" src="../assets/images/Animation2.0.gif" style="width:100%" onclick="currentSlide(6)" alt="Death & the Dwarf, 2D animation">
        </div>
        <div class="column">
        <img class="slide cursor" src="../assets/images/halifax.png" style="width:100%" onclick="currentSlide(7)" alt="Social marketing art for Twitch streamer Halifax">
        </div>
    </div>
  </div>
</div>

<script src="../assets/js/modal-images.js"></script>

<?php
include("../includes/footer.php");   
?>