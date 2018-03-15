<?php
    $config_file = file_get_contents("config/config.json");
    $config = json_decode($config_file, FALSE);
?>
<!DOCTYPE html>
<html>
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

            <div class="categorias">
                <ul>
                    <li onclick="getProds('todos')" class="ativo">Todos</li>
                    <li onclick="getProds('eletronicos')">Eletrônicos</li>
                    <li onclick="getProds('musica')">Música</li>
                    <li onclick="getProds('livros')">Livros</li>
                </ul>
            </div>

            <div id="prods" class="row">
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


    <!--  Inserções de Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.5/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(function(){
            //Lista todos os produtos da lojinha
            getProds('todos');
        });

        $(".categorias li").click(function () {
            if(!$(this).hasClass("ativo")) {
                $(".categorias li").removeClass("ativo");
                $(this).addClass("ativo");
            }
        });

        function getProds(category) {
            $.ajax({
                type: 'GET',
                url: 'produtos.php',
                data: {'category': category},
                success: function (data) {
                    $('#prods').fadeOut('slow', function () {
                        $('#prods').html(data);
                        $(this).fadeIn('slow');
                    });

                }
            });
        }

    </script>

</body>
</html>