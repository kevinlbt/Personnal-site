<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="personnal website - kevin le bot web developper"/>
    <meta name="keywords" content="kevin, web, developper, website"/>
    <meta name="Kevin le bot" content="kevin le bot" />
    <meta name="copyright" content="kevin le bot" />
    <meta name="robots" content="index, follow"/>
    <meta http-equiv="expires" content="43200"/>
   
    <!-- HTML Meta Tags -->
    <title>Kevin le bot</title>

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://kevinlebot.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="kevin">
    <meta property="og:description" content="personnal website of kevin - dev web">
    <meta property="og:image" content="https://kevinlebot.com/assets/logo/logo2.png">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="kevinlebot">
    <meta property="twitter:url" content="https://kevinlebot.com/">
    <meta name="twitter:title" content="kevin">
    <meta name="twitter:description" content="personnal website of kevin - dev web">
    <meta name="twitter:image" content="https://kevinlebot.com/assets/logo/logo2.png">

    <link rel="icon" type="image/x-icon" href="https://kevinlebot.com/assets/logo/logo2.png">
    <link href="/kevinlebot.com/style/style.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="high">

    <?php if (isset($templates) && $templates === "home" || $templates === "contact") {require './src/templates/nav.php';} ?>
    <?php if (isset($templates) && $templates === "home") {require './src/templates/header.php';} ?>
    <?php if (isset($templates) && $templates === "home") {require './src/templates/skills.php';} ?>
    <?php if (isset($templates) && $templates === "home") {require './src/templates/portfolio.php';} ?>
    <?php if (isset($templates) && $templates === "home") {require './src/templates/about.php';} ?>
    <?php if (isset($templates) && $templates === "home" || $templates === "contact") {require './src/templates/contact.php';} ?>
    <?php if (isset($templates) && $templates === "legale") {require './src/templates/legale.php';} ?>
    <?php if (isset($templates) && $templates === "home" || $templates === "contact") {require './src/templates/footer.php';} ?>
    

<script src="https://kevinlebot.com/script/app.js"></script>
<script src="https://kit.fontawesome.com/1012edd4b6.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
