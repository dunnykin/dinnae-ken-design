<?php

$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
    // do stuff for IE
    $ieMessage ="<p>Unfortunately, this site is unavailable for Internet Explorer users. Please try a newer, better browser. Thank you!<p>";
}
else
{
    $ieMessage = "";
    header("Location: php/index.php");
}

?>

<!doctype html>

<html lang="en">
<head>
<meta charset="utf-8">

<title>Dinnae Ken Design | Design, 3D & Game Development</title>
<meta name="description" content="Dinnae Ken Design is an interactive media portfolio for design, 3D and game development based in Moray, Scotland.">
<meta name="author" content="Dinnae Ken Design">
<meta name="keywords" content="interactive media, 3d animation, design, game development, Elgin, Moray, Scotland, Dinnae Ken Design, Dinnae Ken Games">
<meta name="robots" content="noindex, nofollow" />

<!-- Open Graph Meta Tags -->
<meta property="og:type" content="website">
<meta property="og:title" content="Dinnae Ken Design | Design, 3D & Game Development">
<meta property="og:description" content="Dinnae Ken Design is an interactive media portfolio for design, 3D and game development based in Moray, Scotland.">
<meta property="og:url" content="https://www.dinnaeken.co.uk">
<meta property="og:image" content="https://www.dinnaeken.co.uk/assets/images/dinnaekengames-header.png">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@dinnaekengames">
<meta name="twitter:title" content="Dinnae Ken Design | Design, 3D & Game Development">
<meta name="twitter:description" content="Dinnae Ken Design is an interactive media portfolio for design, 3D and game development based in Moray, Scotland.">
<meta name="twitter:image" content="https://www.dinnaeken.co.uk/assets/images/dinnaekengames-header.png">
<meta name="twitter:image:alt" content="Dinnae Ken Design - Design, 3D & Game Development">

</head>
<body>
<?php echo $ieMessage; ?>
</body>
</html>