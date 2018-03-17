<div id="isotope" class="prods-holder">
    <?php
        $product_file = file_get_contents("config/products.json");
        $products = json_decode($product_file, FALSE);

        foreach($products as $row) {

            $prods = <<<HERE

    <div class="col-md-4 sortable">
            <div class="produto">
                <a href="img/{$row->category}/{$row->image}" class="image-popup">
                    <div class="image" style='background-image: url("img/{$row->category}/{$row->image}")' title="{$row->name}"></div>
                </a>
                <div class="desc">

                    <ul class="tags">
                        <li><i class="fa fa-tags"></i></li>
                        <li>{$row->category}</li>
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
                if ($_GET['category'] === $row->category)
                    echo $prods;
                if ($_GET['category'] === 'todos')
                    echo $prods;
            }

        }

    ?>
</div>

<!-- Scripts relativos a Lojinha -->
<script src="js/produtos.js"></script>