
    <div class="catalog">
        <div class="container">
            <div class="row">
                <div class="elitnost col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h3><i class="myicon3 icon-award"></i>Deluxe</h3>
                    <div class="brand-cond">

                    </div>
                    <div class="brand-cond">
                        <img src="<?php echo get_template_directory_uri()?>/img/cond-brands/mitsubishi-electric.png" alt="Mitsubisi Electric" class="band-cond-img">
                    </div>
                    <div class="brand-cond">
                        <img src="<?php echo get_template_directory_uri()?>/img/cond-brands/Panasonic.png" alt="Panasonic" class="band-cond-img">
                    </div>
                </div>
                <div class="elitnost col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h3><i class="myicon3 icon-diamond"></i>Luxe</h3>
                    <div class="brand-cond">

                    </div>
                    <div class="brand-cond">
                        <img src="<?php echo get_template_directory_uri()?>/img/cond-brands/mitsubisi.png" alt="Mitsubisi" class="band-cond-img">
                    </div>
                    <div class="brand-cond">
                        <img src="<?php echo get_template_directory_uri()?>/img/cond-brands/gree.png" alt="GREE" class="band-cond-img">
                    </div>
                </div>
                <div class="elitnost col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h3><i class="myicon3 icon-leaf"></i>Euro</h3>
                    <div class="brand-cond">
                        <img src="<?php echo get_template_directory_uri()?>/img/cond-brands/haier.png" alt="Haier" class="band-cond-img">
                    </div>
                    <div class="brand-cond">
                        <img src="<?php echo get_template_directory_uri()?>/img/cond-brands/mitsushito.png" alt="Mitsushito" class="band-cond-img">
                    </div>
                    <div class="brand-cond">
                        <img src="<?php echo get_template_directory_uri()?>/img/cond-brands/cooperhunter.png" alt="Cooper and Hunter" class="band-cond-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="container catalog-bg">
            <div class="row catalog-body">

                <div class="col-lg-3 col-md-5 hidden-sm hidden-xs">
                    <?php get_sidebar() ?>
                </div>

                <div class="col-lg-9 col-md-7 col-sm-12 col-xs-12 loop-catalog products">
                    <?php
                    $all_products = wc_get_products("publish");
                    foreach ($all_products as $product){

                        $filter = get_field("сплит", $product->id);

                //                                            if ($product->category_ids["0"] == "41") {
                //                                                print_r($product);
                //                                            }
                //                                            if ($filter == "Сплит") {
                //                                                print_r($product);
                //                                            }


                        echo '<div class="loop-product clearfix">';
                        echo '<span class="product_sku">код товара: ' . $product->sku . '</span>';
                        echo '<div class="loop-left">';
                        echo '<span class="type_product">';
                        echo the_field("Вид", $product->id);
                        echo '</span>';
                        echo '<div class="product_thumbnail">' . get_the_post_thumbnail($product->id, 'medium') . '</div>';
                        echo '<div class="mygalery woocommerce-product-gallery">';

                        echo '</div>';
                        echo '</div>';

                        echo '<div class="loop-right">';
                        echo '<h3 class="product_name">' . $product->name . '</h3>';
                        echo '<div class="product_description">' . $product->description . '</div>';
                        echo '<p class="product_price">Цена от: <span>' . $product->price . 'грн</span></p>';
                        //                                        foreach ($product->gallery_image_ids as $image_id) {
                        //                                            echo $image_id . '<br>';
                        //                                        }
                        echo '<a class="main-button" target="_blank" href="'. get_field("Подробнее", $product->id) . '">Подробнее</a>';
                        echo '</div>';
                        echo '</div>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>





    foreach ($all_categories as $cat) {
    if ($cat->term_id == 52) {
    echo '<div class="elitnost col-lg-4 col-md-4 col-sm-12 col-xs-12">';
        echo '<h3><i class="myicon3 icon-' . $cat->name . '"></i>';
            echo $cat->name;
            echo '</h3>';

        }
        if ($cat->term_id == 53) {
        echo '<div class="elitnost col-lg-4 col-md-4 col-sm-12 col-xs-12">';
            echo '<h3><i class="myicon3 icon-diamond"></i>';
                echo $cat->name;
                echo '</h3>';

            }
            if ($cat->term_id == 54) {
            echo '<div class="elitnost col-lg-4 col-md-4 col-sm-12 col-xs-12">';
                echo '<h3><i class="myicon3 icon-leaf"></i>';
                    echo $cat->name;
                    echo '</h3>';

                }
                }