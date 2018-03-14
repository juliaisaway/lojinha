<?php
    $config_file = file_get_contents("config.json");
    $product_file = file_get_contents("produtos/produtos.json");

    $config = json_decode($config_file, FALSE);
    $products = json_decode($product_file, FALSE);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $config->site_name ?></title>
    
    <!-- Metatags básicas do site -->
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lojinha de itens a venda do Ilton. Espaço de desapego do Ilton.">
    <meta name="keywords" content="Lojinha de itens a venda do Ilton. Espaço de desapego do Ilton.">

    <!-- Metatags para redes sociais -->
    <meta property="og:title" content="<?= $config->site_name ?>">
    <meta property="og:description" content="<?= $config->metatags->description ?>">
    <meta property="og:url" content="http://ilton.me/loja">
    <meta property='og:image' content='http://ilton.me/lojinha/img/thumbnail.jpg'>
    <meta name="twitter:card" content="summary_large_image">

    <!-- Links de Favicon para diferentes situações -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
    <link rel="manifest" href="/img/icons/site.webmanifest">
    <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/icons/favicon.ico">

    <!-- Informaçoes de cores da página para navegadores Mobile -->
    <meta name="msapplication-config" content="/img/icons/browserconfig.xml">
    <meta name="theme-color" content="#333333">
    <meta name="msapplication-TileColor" content="#333333">
    <meta name="msapplication-navbutton-color" content="#333333">
    <meta name="apple-mobile-web-app-status-bar-style" content="#333333">

    <!-- Informações de estilização -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!--  Inserções de Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.5/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</head>
<body>

    <header>
        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2">
                    <h1>Lojilto - A Lojinha do Ilto</h1>
                    <h2>Espaço de desapego do Ilton.<br>Aqui, anuncio tudo que está parado em casa e gostaria de passar pra frente.</h2>
                    <div class="links-spacing">
                        <a href="mailto:eu@ilton.me" target="_blank"><i class="fa fa-envelope-o"></i> Entre em contato</a>
                        <a href="http://twitter.com/iltoisaway" target="_blank"><i class="fa fa-twitter"></i> Siga-me no Twitter</a>
                        <a href="https://telegram.me/iltonalberto" target="_blank"><i class="fa fa-telegram"></i> Manda um Telegram</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <section id="produtos" class="produtos">
        <div class="container">
            <div id="isotope" class="row">
                
                <?php foreach($products as $row){ ?>
                    <div class="col-md-4 sortable" data-id="<?= $row->id ?>">
                        <div class="produto">
                            <a href="img/<?= $row->image ?>" class="image-popup">
                                <div class="image" style="background-image: url('img/<?= $row->image ?>')" title="<?= $row->name ?>"></div>
                            </a>
                            <div class="desc">

                                <ul class="tags">
                                    <li><i class="fa fa-tags"></i></li>
                                    <?php foreach($row->tags as $tags){ ?>
                                        <li><?= $tags ?></li>
                                    <?php } ?>
                                </ul>

                                <h3><?= $row->name ?></h3>
                                <h4>R$ <?= $row->price ?></h4>
                                <p><?= $row->description ?></p>
                                <a href="<?= $row->links->link ?>" target="_blank"><i class="fa fa-external-link"></i> <?= $row->links->local ?></a>

                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2>Mini Lojinha desenvolvida por <a href="http://ilton.me">Ilton Alberto Junior</a>. Projeto OpenSource no <a href="https://github.com/iltonjr/lojinha" target="_blank">GitHub</a></h2>
                </div>
            </div>
        </div>
    </footer>

<script>
    $(function(){
        $('#isotope').isotope({
            itemSelector : '.sortable'
        });
        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            image: {
                verticalFit: true
            }
        });
    });
</script>

</body>
</html>