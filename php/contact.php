<?php
$title = "Contact";
$dkName = "Dinnae Ken Design";
$description = "Dinnae Ken Design is an interactive media portfolio for design, 3D and game development based in Moray, Scotland.";
$keywords = "interactive media, 3d animation, design, game development, Elgin, Moray, Scotland, Dinnae Ken Design, Dinnae Ken Games";
$url = "https://www.dinnaeken.co.uk/php/contact.php";
$image = "https://www.dinnaeken.co.uk/assets/images/dinnaekengames-header.png";
$imageAlt = "Dinnae Ken Design - Design, 3D & Game Development";
include("../includes/header.php");   
?>
<div class="contact-wrapper">
    <main class="contact">
    <h1>Get in touch</h1>
    <p>You can get in touch with me directly by email or follow the links below to find me on whichever platform your prefer:</p>
    <br>
    <address>
        <a href="mailto:contact@dinnaeken.co.uk">Click here to open an email to me!</a>
    </address>
    <br>
    <p>Click the links below to find me on:</p>
    <ul class="contact-links">
        <li><a class="btn btn-contact" href="https://www.facebook.com/dinnaekengames/">Facebook</a></li>

        <li><a class="btn btn-contact" href="https://twitter.com/dinnaekengames">Twitter</a></li>

        <li><a class="btn btn-contact" href="https://www.youtube.com/channel/UCAZHYqMr-eTAFj-OVAr8m4Q">Youtube</a></li>

        <li><a class="btn btn-contact" href="https://www.instagram.com/dinnaekengames/">Instagram</a></li>

        <li><a class="btn btn-contact" href="https://dinnaeken.itch.io/">Itch.io</a></li>
    </ul>
    </main>

    <aside class="facebook">
        <h1>Facebook</h1>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdinnaekengames%2F&tabs=timeline&width=340&height=900&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" 
        width="340" height="900" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </aside>

    <aside class="twitter">
        <h1>Twitter</h1>
        <a class="twitter-timeline" data-height="1000" data-theme="dark" data-link-color="#E95F28" href="https://twitter.com/dinnaekengames?ref_src=twsrc%5Etfw">
            Tweets by dinnaekengames</a> 
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </aside>
</div>
<?php
include("../includes/footer.php");   
?>