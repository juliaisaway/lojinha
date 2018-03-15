<div id="isotope" class="prods-holder">
    <?php
        $product_file = file_get_contents("../produtos/produtos.json");
        $products = json_decode($product_file, FALSE);

        foreach($products as $row) {

            $prods = <<<HERE

    <div class="col-md-4 sortable" data-id="{$row->id}">
            <div class="produto">
                <a href="img/{$row->image}" class="image-popup">
                    <div class="image" style='background-image: url("img/{$row->image}")' title="{$row->name}"></div>
                </a>
                <div class="desc">

                    <ul class="tags">
                        <li><i class="fa fa-tags"></i></li>
                        <li>{$row->tags}</li>
                    </ul>

                    <h3>{$row->name}</h3>
                    <h4>R$ {$row->price}</h4>
                    <p>{$row->description}</p>
                    <a href="{$row->links->link}" target="_blank"><i class="fa fa-external-link"></i> {$row->links->local}</a>

                </div>
            </div>
        </div>

HERE;

            if(isset($_GET['category'])) {
                if ($_GET['category'] === $row->tags)
                    echo $prods;
                if ($_GET['category'] === 'todos')
                    echo $prods;
            }

        }

    ?>
</div>

<script>
    $(function(){

        // Inicializa o Isotopo de mosaico do site
        $('#isotope').isotope({
            itemSelector : '.sortable'
        });

        // Inicializa o plugin de overlay de imagens
        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            image: {
                verticalFit: true
            }
        });

    })
</script>
