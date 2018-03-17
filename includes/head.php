<?php
    $config_file = file_get_contents("config/config.json");
    $config = json_decode($config_file, FALSE);
?>
<head>
    <title><?= $config->site_name ?></title>

    <!-- Metatags básicas do site -->
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $config->metatags->description ?>">
    <meta name="keywords" content="<?= $config->metatags->keywords ?>">

    <!-- Metatags para redes sociais -->
    <meta property="og:title" content="<?= $config->site_name ?>">
    <meta property="og:description" content="<?= $config->metatags->description ?>">
    <meta property="og:url" content="<?= $config->metatags->url ?>">
    <meta property='og:image' content='<?= $config->metatags->url.$config->metatags->thumbnail ?>'>
    <meta name="twitter:card" content="summary_large_image">

    <!-- Informaçoes de cores da página para navegadores Mobile -->
    <meta name="msapplication-config" content="/img/icons/browserconfig.xml">
    <meta name="theme-color" content="<?= $config->metatags->color ?>">
    <meta name="msapplication-TileColor" content="<?= $config->metatags->color ?>">
    <meta name="msapplication-navbutton-color" content="<?= $config->metatags->color ?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= $config->metatags->color ?>">

    <!-- Links de Favicon para diferentes situações -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
    <link rel="manifest" href="/img/icons/site.webmanifest">
    <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="<?= $config->metatags->color ?>">
    <link rel="shortcut icon" href="/img/icons/favicon.ico">

    <!-- Informações de estilização -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>