<!DOCTYPE html>
<html>
<?php require_once('includes/head.php') ?>
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


    <!--  Inserções de Javascript via CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.5/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Scripts relativos a Lojinha -->
    <script src="js/index.js"></script>

</body>
</html>