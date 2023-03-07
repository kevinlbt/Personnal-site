<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="my-site"/>
    <meta name="keywords" content=""/>
    <meta name="Kevin le bot" content="kevin le bot" />
    <meta name="copyright" content="kevin le bot" />
    <meta name="robots" content="index, follow"/>
    <meta http-equiv="expires" content="43200"/>
   
    <link href="./style/style.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Iceberg&family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="high">

    <?php require './src/templates/nav.php'; ?>
    <?php if (isset($templates) && $templates === "home") {require './src/templates/header.php';} ?>
    <?php if (isset($templates) && $templates === "home") {require './src/templates/skills.php';} ?>
    <?php if (isset($templates) && $templates === "home") {require './src/templates/portfolio.php';} ?>
    <?php if (isset($templates) && $templates === "home") {require './src/templates/about.php';} ?>
    <?php if (isset($templates) && $templates === "home" || $templates === "contact") {require './src/templates/contact.php';} ?>
    <?php require './src/templates/footer.php'; ?>
    

<script src="./script/app.js"></script>
<script src="https://kit.fontawesome.com/1012edd4b6.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
