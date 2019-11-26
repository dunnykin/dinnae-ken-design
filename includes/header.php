<?php
$ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
    // do stuff for IE
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $dkName;?> | <?php echo $title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="author" content="<?php echo $dkName;?>">
    <meta name="keywords" content="<?php echo $keywords;?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $dkName;?> | <?php echo $title;?>">
    <meta property="og:description" content="<?php echo $description;?>">
    <meta property="og:url" content="<?php echo $url;?>">
    <meta property="og:image" content="<?php echo $image;?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@dinnaekengames">
    <meta name="twitter:title" content="<?php echo $dkName;?> | <?php echo $title;?>">
    <meta name="twitter:description" content="<?php echo $description;?>">
    <meta name="twitter:image" content="<?php echo $image;?>">
    <meta name="twitter:image:alt" content="<?php echo $imageAlt;?>">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
</head>
<body> <!-- Container closes in footer -->

<?php
include("navigation.php");
?>

<main class="main-content"> <!-- Container closes in footer -->