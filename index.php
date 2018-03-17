<?php
    $category_file = file_get_contents("config/categories.json");
    $categories = json_decode($category_file, FALSE);
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/head.php') ?>
<body>

    <header>
        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2">
                    <h1><?= $config->site_name ?></h1>
                    <h2><?= $config->site_description ?></h2>
                    <div class="links-spacing">
                        <?php foreach($config->contact as $row){ ?>
                        <a href="<?= $row->link ?>" target="_blank"><i class="fa <?= $row->icon ?>"></i> <?= $row->desc ?></a>
                        <?php } ?>
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
                    <?php
                        foreach($categories as $row){
                            if($row->active != false)
                                echo "<li onclick=\"getProds('".$row->slug."')\">".$row->name."</li>";
                        }
                    ?>
                </ul>
            </div>

            <div id="prods" class="row">
            </div>
        </div>
    </section>

    <?php require_once('includes/footer.php') ?>

</body>
</html>