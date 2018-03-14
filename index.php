<?php require_once('produtos.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Lojinha do Ilto</title>
    
    <!-- Metatags básicas do site -->
    <meta charset="UTF-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Lojinha de itens a venda do Ilton. Espaço de desapego do Ilton.">

    <!-- Metatags para redes sociais -->
    <meta property="og:title" content="Lojinha do Ilto">
    <meta property="og:description" content="Lojinha de itens a venda do Ilton. Aqui, anuncio tudo que está parado em casa e gostaria de passar pra frente.">
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
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.5/isotope.pkgd.min.js"></script>
</head>
<body>

    <header>
        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2">
                    <h1>Lojinha do Ilto</h1>
                    <h2>Espaço de desapego do Ilton.<br>Aqui, anuncio tudo que está parado em casa e gostaria de passar pra frente.</h2>
                    <div class="links-spacing">
                        <a href="mailto:eu@ilton.me"><i class="fa fa-envelope-o"></i> Entre em contato comigo</a>
                    <a href="http://twitter.com/iltoisaway"><i class="fa fa-twitter"></i> Siga-me no Twitter</a>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section id="produtos" class="produtos">
        <div class="container">
            <div id="isotope" class="row">
                
                <?php foreach($produtos as $row){ ?>
                    <div class="col-md-4 sortable">
                        <div class="produto">
                            <div class="image" style="background-image: url('img/<?= $row['foto'] ?>')"></div>
                            <div class="desc">
                                <h3><?= $row['nome'] ?></h2>
                                <h4>R$ <?= $row['valor'] ?></h3>
                                <p><?= $row['desc'] ?></p>
                                <a href="<?= $row['link_externo'] ?>'" target="_blank"><i class="fa fa-external-link"></i> Ver mais na OLX</a>
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
                    <h2>Site desenvolvido por <a href="http://ilton.me">Ilton Alberto Junior</a>. Todos os direitos reservados.</h2>
                </div>
            </div>
        </div>
    </footer>

<script>
    $(function(){
        $('#isotope').isotope({
            itemSelector : '.sortable',
        });
    });
</script>
</script>


</body>
</html>